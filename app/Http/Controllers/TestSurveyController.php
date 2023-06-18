<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TestServicesRequest;
use App\Models\Answer;
use App\Models\Cars;
use App\Models\City;
use App\Models\Country;
use App\Models\Group;
use App\Models\GroupLocation;
use App\Models\HotelApartment;
use App\Models\Location;
use App\Models\PublicTransportation;
use App\Models\Resurvation;

class TestSurveyController extends Controller
{



    // index_survey
    public function index(){
        $questions = Question::all();

        return view('frontend.page.test_survey',['questions'=>$questions]);
    }



    // survey sign_in
    public function signIn(Request $request){


        $survey_data = $request->all();

        

        foreach($survey_data  as  $key => $value){
            if(preg_match("/^q(.*)/i", $key)){

                // $q_id = str_replace("q","",$key);
    
                session([$key => $value]);
            }
        }   

        // dd(session()->all());

        
        return view('frontend.page.sign_in');
    }



    public function store(Request $request){
        


        // 1)store in users table

        // a.set session_key
        session(['session_key'=> time()]);
        $session_key = session('session_key');

        // b.store in users table
        $user =  DB::table('users')->insert([
            'name'=>$request->user_name,
            'email'=>$request->user_email,
            'mobile'=>$request->user_phone,
            'communicate_way'=>$request->communicate_way,
            'payment_method'=>$request->payment_method,
            'about_yourself'=>$request->about_yourself,
            'adults_number'=>$request->adults_number,
            'children_number'=>$request->children_number,
            'travel_date'=>$request->travel_date,
            'date_from'=>$request->date_from,
            'date_to'=>$request->date_to,
            'days_count'=>$request->days_count,
            'month'=>$request->month,
            'session_key'=>$session_key,
        ]);


        // 2)store in answer_user table
    
        // a.get user with session_key
        $user_id = DB::table('users')->where('session_key',$session_key)->first()->id;

        // b.store_survey_data 
        foreach(session()->all() as $key => $value){
            if(preg_match("/^q(.*)/i", $key)){
                $q_id = str_replace("q","",$key);

                $q = Question::find($q_id);

                if($q->type == 'radio' || $q->type == 'checkbox' ){
                    foreach ($value as  $value2) {

                        DB::table('answer_user')->insert([
                            'user_id'=>$user_id,
                            'question_id'=>$q_id,
                            'answer_id'=> $value2
                        ]);
                    }

                }

            }
        }




        // 3) empty the session
        // session()->flush();








        //////////////////////////////////////////////////////////////////////////////////////////////////

        // 4) get the user answers from tables(users,answer-user)
        $user = User::where('session_key', $session_key)->first();

        $adults_number  = $user->adults_number ; 
        $children_number = $user->children_number;

        $all_travellers = $adults_number + $children_number;
        $hotel_room_max_count = 3 ;
        $number_of_rooms = 0;

        if($all_travellers > $hotel_room_max_count){
            $number_of_rooms = $all_travellers / $hotel_room_max_count ;    //   17/3 
            $number_of_rooms_converted = (int)$number_of_rooms;             //    5

            $mod = fmod($all_travellers,$hotel_room_max_count);             // 2

            if($mod != 0){
                $number_of_rooms = $number_of_rooms_converted + 1 ;
            }else{
                $number_of_rooms = $number_of_rooms_converted;
            }

            $number_of_rooms_converted = (int)$number_of_rooms;
        }else{
            $number_of_rooms = 1;
        }







        $days_count = '';
        if($user->days_count != null){
            $days_count = $user->days_count;
        }else{
            $start_time = \Carbon\Carbon::parse($user->date_from);
            $finish_time = \Carbon\Carbon::parse($user->date_to);
            $days_count = $start_time->diffInDays($finish_time, false); 
        }


        // stars , answer_user_table 
        $service_stars = Resurvation::where('user_id',$user->id)->where('question_id',6)->first()->answer_id;
        // 20 => 3 stars
        // 21 => 4 stars
        // 22 => 5 stars

        $stars = '';
        if($service_stars == 20){
            $stars = 3 ;
        }elseif($service_stars == 21){
            $stars = 4 ;
        }else{
            $stars = 5;
        }


        $car_type = Resurvation::where('user_id',$user->id)->where('question_id',1)->first()->answer_id;
        // 4 => car with driver
        // 5 => rental car
        // 7 => public transportation

        
        
        
        $hotels_or_apartment = Resurvation::where('user_id',$user->id)->where('question_id',2)->first()->answer_id;
        // 2 => appartments
        // 3 => hotels


        $city_or_theCountry = Resurvation::where('user_id',$user->id)->where('question_id',4)->first()->answer_id;
        // 17 => cities
        // 18 => the country
        // 19 => both





        $countries = Resurvation::where('user_id',$user->id)->where('question_id',3)->get();
        $arr_countries = [];
        foreach($countries as $c){
            $arr_countries[] = $c->answer_id;
        }
        $count_of_choosed_countries = Resurvation::where('user_id',$user->id)->where('question_id',3)->count();
        



        // equation of division days_count / count_of_choosed_countries
        $days_for_each_country = $days_count/$count_of_choosed_countries;   //  21/4
        $days_for_each_country_converted = (int)$days_for_each_country;     //  5
        $mod = fmod($days_count, $count_of_choosed_countries);       //1
        $country_that_exceeds_mod = $days_for_each_country_converted + $mod ;   //6

        $days_for_each_country_after_add_mod = [];
        for($i=0 ; $i < $count_of_choosed_countries ; $i++){
            if($i == 0 ){
                $decimal_value = $days_for_each_country_converted + $mod;
                $days_for_each_country_after_add_mod[] = (int)$decimal_value;
            }else{
                $days_for_each_country_after_add_mod[] =  $days_for_each_country_converted;
            }
            
        }




        $activities = Resurvation::where('user_id',$user->id)->where('question_id',5)->get();
        $activities_countries = [];
        foreach($activities as $a){
            if($a->answer == 23){
                $activities_countries[] = 'family';
            }elseif($a->answer == 24){
                $activities_countries[] = 'museums';
            }elseif($a->answer == 25){
                $activities_countries[] = 'relax';
            }else{
                $activities_countries[] = 'romantic';
            }
             
        }

        // 23 => أنشطة أسرية
        // 24 => متاحف واثار
        // 25 => راحة واسترخاء
        // 26 => انشطة رومانسية



        ///////////////////////////////////////////////////////////////////////////

        // outputs
        
        $output_array=[];

        // $output_array['adults_number'] = $adults_number;
        // $output_array['children_number'] = $children_number;
        // $output_array['days_count'] = $days_count;


        foreach($arr_countries as  $key => $c){
            $answer_id = $c;
            $choosed_country_name = Answer::Where('id',$answer_id)->first()->answer;   //النمسا

            $country_id = Country::where('slug',$choosed_country_name)->first()->id;
            $country_name = Country::where('id',$country_id)->first()->slug;

            $country_image = Country::where('id',$country_id)->first()->image;


            $output_array[$country_name] =[];






            
            $main_city = City::where('country_id',$country_id)->where('is_main','1')->first();


            $output_array[$country_name]['main_city'] = $main_city->slug;

            $output_array[$country_name]['number_of_days'] = $days_for_each_country_after_add_mod[$key];
            $days_in_each_country = $output_array[$country_name]['number_of_days'];

            $output_array[$country_name]['country_image'] = $country_image;

            $output_array[$country_name]['country_name'] = $country_name;


            // hotels or apartment
            $suggested_hotels_or_apartments = '';
            if($hotels_or_apartment == 3){ //hotels
                $suggested_hotels_or_apartments = HotelApartment::where('country_id',$country_id)->where('city_id',$main_city->id)->where('type','Hotel')->where('stars',$stars)->get();
                $output_array[$country_name]['suggested_hotels'] = implode(",",$suggested_hotels_or_apartments->pluck('slug')->toArray());

                $one_room_cost = $suggested_hotels_or_apartments->first()->price??0;
                $all_rooms_cost = $one_room_cost * $number_of_rooms ;
                $output_array[$country_name]['hotel_cost'] = $all_rooms_cost;
                $output_array[$country_name]['number_of_rooms'] = $number_of_rooms;


            }else{ //apartment
                $suggested_hotels_or_apartments = HotelApartment::where('country_id',$country_id)->where('city_id',$main_city->id)->where('type','Apartment')->where('stars',$stars)->get();
                $output_array[$country_name]['suggested_appartments'] = implode(",",$suggested_hotels_or_apartments->pluck('slug')->toArray());

                $output_array[$country_name]['hotel_cost'] =$suggested_hotels_or_apartments->first()?$suggested_hotels_or_apartments->first()->price:0;
            }




            // car
            $suggested_cars = '';
            if($car_type == 4){ //car with driver
                $suggested_cars = Cars::where('country_id',$country_id)->where('city_id',$main_city->id)->where('stars',$stars)->where('type','car_with_driver')->get();
                $output_array[$country_name]['car_with_driver'] = implode(',',$suggested_cars->pluck('slug')->toArray());
                $output_array[$country_name]['car_image'] = $suggested_cars->pluck('image')->toArray();
                $output_array[$country_name]['car_cost'] = $suggested_cars->first()->price ?? 0 ;


            }elseif($car_type == 5){ //rental car
                $suggested_cars = Cars::where('country_id',$country_id)->where('city_id',$main_city->id)->where('stars',$stars)->where('type','rental_car')->get();
                $output_array[$country_name]['rental_car'] = implode(',',$suggested_cars->pluck('slug')->toArray());
                $output_array[$country_name]['car_image'] = $suggested_cars->pluck('image')->toArray();
                $output_array[$country_name]['car_cost'] = $suggested_cars->first()->price ?? 0 ;

            }else{ //transportation  car_type = 7
                $suggested_cars = PublicTransportation::where('country_id',$country_id)->where('city_id',$main_city->id)->first();
                $output_array[$country_name]['public_transportation'] = $suggested_cars;
                $output_array[$country_name]['car_cost'] = $suggested_cars->first()->price ? (($suggested_cars->first()->price)*($all_travellers)) : 0 ;

            }







            // days 
            $locationsIDS_in_choosed_country = Location::where('country_id',$country_id)->pluck('id')->toArray();
            $days = GroupLocation::whereIn('location_id',$locationsIDS_in_choosed_country)->where('group_id','<=',$days_in_each_country)->get();


            $arr= [];
            foreach($days as $d){
                if($d->group_id == 1 ){
                    $arr['day_one'][] = Location::where('id',$d->location_id)->first()->slug;
                    
                }else if($d->group_id == 2 ){
                    $arr['day_two'][] = Location::where('id',$d->location_id)->first()->slug;
                    
                }else if($d->group_id == 3 ){
                    $arr['day_three'][] = Location::where('id',$d->location_id)->first()->slug;
                    
                }else if($d->group_id == 4 ){
                    $arr['day_four'][] = Location::where('id',$d->location_id)->first()->slug;
                    
                }else if($d->group_id == 5 ){
                    $arr['day_five'][] = Location::where('id',$d->location_id)->first()->slug;
                    
                }else if($d->group_id == 6 ){
                    $arr['day_six'][] = Location::where('id',$d->location_id)->first()->slug;
                    
                }else if($d->group_id == 7 ){
                    $arr['day_seven'][] = Location::where('id',$d->location_id)->first()->slug;
                    
                }else if($d->group_id == 8 ){
                    $arr['day_eight'][] = Location::where('id',$d->location_id)->first()->slug;

                }else if($d->group_id == 9 ){
                    $arr['day_nine'][] = Location::where('id',$d->location_id)->first()->slug;
                    
                }else if($d->group_id == 10 ){
                    $arr['day_ten'][] = Location::where('id',$d->location_id)->first()->slug;
                }

            }

            $output_array[$country_name]['days'] = $arr;


            $arr_prices= [];
            foreach($days as $d){
                if($d->group_id == 1 ){
                    $arr_prices['Day_one'][] = Location::where('id',$d->location_id)->first()->price;
                    
                }else if($d->group_id == 2 ){
                    $arr_prices['Day_two'][] = Location::where('id',$d->location_id)->first()->price;
                    
                }else if($d->group_id == 3 ){
                    $arr_prices['Day_three'][] = Location::where('id',$d->location_id)->first()->price;
                    
                }else if($d->group_id == 4 ){
                    $arr_prices['Day_four'][] = Location::where('id',$d->location_id)->first()->price;
                    
                }else if($d->group_id == 5 ){
                    $arr_prices['Day_five'][] = Location::where('id',$d->location_id)->first()->price;
                    
                }else if($d->group_id == 6 ){
                    $arr_prices['Day_six'][] = Location::where('id',$d->location_id)->first()->price;
                    
                }else if($d->group_id == 7 ){
                    $arr_prices['Day_seven'][] = Location::where('id',$d->location_id)->first()->price;
                    
                }else if($d->group_id == 8 ){
                    $arr_prices['Day_eight'][] = Location::where('id',$d->location_id)->first()->price;

                }else if($d->group_id == 9 ){
                    $arr_prices['Day_nine'][] = Location::where('id',$d->location_id)->first()->price;
                    
                }else if($d->group_id == 10 ){
                    $arr_prices['Day_ten'][] = Location::where('id',$d->location_id)->first()->price;
                }

            }
            $output_array[$country_name]['days_prices'] = $arr_prices;


            

            // cities 
            // $suggested_cities =City::where('country_id',$country_id)->whereIn('journey_type',$activities_countries);
            // $arr_cities_slugs = [];

            // if($city_or_theCountry == 17){ //cities
            //     $suggested_cities = $suggested_cities->where('type','city')->get();
            //     $output_array[$country_name]['suggested_cities(city)'] = implode(',',$suggested_cities->pluck('slug')->toArray());
            //     $arr_cities_slugs = $suggested_cities->pluck('slug')->toArray();
            //     $output_array[$country_name]['suggested_cities(image)'] = $suggested_cities->pluck('image')->toArray();
            //     $output_array[$country_name]['suggested_cities(city_cost)'] = $suggested_cities->first()->journey_cost??0;

            // }elseif($city_or_theCountry == 18) {//the_country
            //     $suggested_cities = $suggested_cities->where('type','the_country')->get();
            //     $output_array[$country_name]['suggested_cities_(the_country)'] = implode(',',$suggested_cities->pluck('slug')->toArray());
            //     $arr_cities_slugs = $suggested_cities->pluck('slug')->toArray();
            //     $output_array[$country_name]['suggested_cities(image)'] = $suggested_cities->pluck('image')->toArray();
            //     $output_array[$country_name]['suggested_cities(the_country_cost)'] = $suggested_cities->first()->journey_cost??0;


            // }else{ //both
            //     $suggested_cities = $suggested_cities->where('type','both')->get();
            //     $output_array[$country_name]['both'] = $suggested_cities;
            //     $output_array[$country_name]['both_cost'] = $suggested_cities->first()->journey_cost??0;

            // }







            // equation of division days_count_for_country / count_of_choosed_cities
            // $count_of_choosed_cities = $suggested_cities->count();
            // $days_for_each_city = $days_in_each_country/$count_of_choosed_cities;   //  10/3
            // $days_for_each_city_converted = (int)$days_for_each_city;     //  3
            // $mod = fmod($days_in_each_country, $count_of_choosed_cities);       // 1
            // // $city_that_exceeds_mod = $days_for_each_city_converted + $mod ;   // 3+1 = 4

            // $days_for_each_city_after_add_mod = [];
            // for($i=0 ; $i < $count_of_choosed_cities ; $i++){
            //     if($i == 0 ){
            //         $decimal_value = $days_for_each_city_converted + $mod;
            //         $days_for_each_city_after_add_mod[] = (int)$decimal_value;
            //     }else{
            //         $days_for_each_city_after_add_mod[] =  $days_for_each_city_converted;
            //     }
                
            // }


            // $arr_city_days = [];
            // foreach($arr_cities_slugs  as  $key => $c){
            //     $arr_city_days[$c] = $days_for_each_city_after_add_mod[$key];
            // }

            // $output_array[$country_name]['city_days']= $arr_city_days;

           
        }

        // dd($output_array);
            

        return view('frontend.page.proposal',['output_array' => $output_array]);


        //////////////////////////////////////////////////////////////////////////////////////////////////
        // 5) redirect to thank you page
        // return redirect()->route('thank_you_survey');



    }



    public function proposal(){
        return view('frontend.page.proposal');
    }


    public function thankYou(){
        return view('frontend.page.thank_you');
    }





    



}




  



    


    

    

