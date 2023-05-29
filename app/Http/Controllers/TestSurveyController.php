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


        // session()->flush();


        $survey_data = $request->all();
        

        foreach($survey_data  as  $key => $value){
            if($key != '_token' && $key != '_method'){

                $q_id = str_replace("q","",$key);
    
                session([$q_id => $value]);
            }
        }   


        
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
    
        // a.get last user_id inserted
        $user_id = DB::table('users')->where('session_key',$session_key)->first()->id;


        // b.store_survey_data 
        foreach(session()->all() as $key => $value){
            if(is_int($key) && $key > 0){
                $q_id = str_replace("q","",$key);
                $q = Question::find($q_id);

                if($q->type == 'image'){
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


 
        // 4) redirect to thank you page
        return redirect()->route('thank_you_survey');



    }


    public function thankYou(){
        return view('frontend.page.thank_you');
    }
}



  



    


    

    

