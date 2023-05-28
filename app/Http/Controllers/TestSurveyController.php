<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TestServicesRequest;




class TestSurveyController extends Controller
{



    // index_survey
    public function index(){
        $questions = Question::all();

        return view('frontend.page.test_survey',['questions'=>$questions]);
    }



    // survey sign_in
    public function signIn(Request $request){
        $q_data = $request->all();
        
        return view('frontend.page.sign_in',['q_data'=>$q_data]);
    }



    public function thankYou(Request $request){
        
    
        // 1)store in users table
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

        ]);



        // 2)store in answer_user table
    
        // a.get last user_id inserted
        $user_id = DB::table('users')->orderBy('id','DESC')->first()->id;


        // b.get_survey_data_in_an_array
        $survey_data_json = $request->q_data;
        $survey_data_array = json_decode($survey_data_json, true);

        $questions_array = [];

        foreach($survey_data_array  as  $key => $value){
            if($key != '_token' && $key != '_method'){
                $questions_array[$key] = $value;
            }
        }   


        // c.store_survey_data 
        foreach($questions_array as $key => $value){
            $q_id = str_replace("q","",$key);
            $q = Question::find($q_id);

            if($q->type == 'image'){
                foreach ($value as $key2 => $value2) {
                    DB::table('answer_user')->insert([

                        'user_id'=>$user_id,
                        'question_id'=>$q_id,
                        'answer_id'=> $value2
                    ]);
                }
             }  
        }


 
        // 3)redirect to thank you page
        return view('frontend.page.thank_you');



    }
}



    // public function thankYou(TestServicesRequest $request){
        
    
    //     // 1)store in users table
    //    $user =  DB::table('users')->insert([
    //         'name'=>$request->q8['36'],
    //         'email'=>$request->q8['37'],
    //         'mobile'=>$request->q8['38'],
    //         'communicate_way'=>$request->q8['39'],
    //         'payment_method'=>$request->q8['40'],
    //         'about_yourself'=>$request->q8['41']
    //     ]);

    //     // dd($request->all());

    

    //     // 2)store in answer_user table
    //     $user_id = DB::table('users')->orderBy('id','DESC')->first()->id;

    //             foreach($request->validated() as $key=>$value){
    //                 $q_id = str_replace("q","",$key);
    //                 $q = Question::find($q_id);

    //                 if($q->type == 'image' || $q->type == 'checkbox'){
    //                     foreach ($value as $key2 => $value2) {
    //                         DB::table('answer_user')->insert([
    
    //                             'user_id'=>$user_id,
    //                             'question_id'=>$q_id,
    //                             'answer_id'=> $value2
    //                         ]);
    //                     }

    //                 }elseif($q->type == 'counter' || $q->type == 'form'){
    //                     foreach ($value as $key2 => $value2) {
    //                         DB::table('answer_user')->insert([
    
    //                             'user_id'=>$user_id,
    //                             'question_id'=>$q_id,
    //                             'answer_id'=> $key2,
    //                             'value_of_answer'=>$value2,
    //                         ]);
    //                     }
    //                 }elseif($q->type =='dateAndCounter'){
    //                     foreach ($value as $key2 => $value2) {
    //                         if($key2 == 0) {
    //                             $answer_id = $value2;
    //                         }

    //                         if($value2 != null && $key2 != 0){
    //                             DB::table('answer_user')->insert([

    //                                 'user_id'=>$user_id,
    //                                 'question_id'=>$q_id,
    //                                 'answer_id'=> $answer_id ,
    //                                 'value_of_answer'=>$value2,
    //                             ]);
    //                         }
                            
    //                     }

    //                 }
    
    //             }  




        
    //     // 3)redirect to thank you page
    //     return view('frontend.page.thank_you');



    // }




    


    

    

