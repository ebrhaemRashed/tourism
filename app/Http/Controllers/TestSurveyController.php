<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TestServicesRequest;
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
        session()->flush();




        // 4) get_the_user_answers from tables(users,answer-user)
        // $user = User::where('session_key', $session_key)->first();
        // $adults_number  = $user->adults_number ; 
        // $children_number = $user->children_number;
        // $days_count = '';
        // if($user->days_count != null){
        //     $days_count = $user->days_count;
        // }else{
        //     $start_time = \Carbon\Carbon::parse($user->date_from);
        //     $finish_time = \Carbon\Carbon::parse($user->date_to);
        //     $days_count = $start_time->diffInDays($finish_time, false); 
        // }


        // // stars , answer_user_table 
        // $service_stars = Resurvation::where('user_id',$user->id)->where('question_id',6)->first()->answer_id;
        // $stars = '';
        // if($service_stars == 20){
        //     $stars = 3 ;
        // }elseif($service_stars == 21){
        //     $stars = 4 ;
        // }else{
        //     $stars = 5;
        // }


        // $car_type = Resurvation::where('user_id',$user->id)->where('question_id',1)->first()->answer_id;
        
        // $hotes_or_apartment = Resurvation::where('user_id',$user->id)->where('question_id',2)->first()->answer_id;
       
        // $city_or_theCountry = Resurvation::where('user_id',$user->id)->where('question_id',4)->first()->answer_id;


        // $countries = Resurvation::where('user_id',$user->id)->where('question_id',3)->get();
        // $arr_countries = [];
        // foreach($countries as $c){
        //     $arr_countries[] = $c->answer_id;
        // }


        // $activities = Resurvation::where('user_id',$user->id)->where('question_id',5)->get();
        // $activities_countries = [];
        // foreach($activities as $a){
        //     $activities_countries[] = $a->answer_id;
        // }


 
        // 5) redirect to thank you page
        return redirect()->route('thank_you_survey');



    }


    public function thankYou(){
        return view('frontend.page.thank_you');
    }
}



  



    


    

    

