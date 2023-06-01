<?php
namespace App\Http\Controllers\Admin;

use App\Actions\Resurvation\StoreResurvationAction;
use App\Actions\Resurvation\UpdateResurvationAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Resurvation\StoreResurvationRequest;
use App\Http\Requests\Resurvation\UpdateResurvationRequest;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Resurvation;
use App\Models\User;
use App\ViewModels\ResurvationView\ResurvationViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class ResurvationController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(Resurvation $resurvation){
        $this->Model=$resurvation;
        $this->messageStore='Success Add Resurvation';
        $this->messageUpdate='Update Resurvation';
        $this->messageDelete='Success  Delete Resurvation';
        $this->route='admin.resurvation.index';
        $this->nameViewCrud='admin.resurvation';
        $this->StoreAction=StoreResurvationAction::class;
        $this->UpdateAction=UpdateResurvationAction::class;
    }

    public function ViewModel($data=null): ResurvationViewModel
    {
       $ViewMode = new ResurvationViewModel($data);
       return $ViewMode;
    }

    public function index():View
    {
        
        $data = $this->Model::Search();
        $user = new User();
        $question = new Question();
        $answer = new Answer();
        return view($this->nameViewCrud.'.view',$this->ViewModel(),['data'=>$data,'user'=>$user,'question'=>$question,'answer'=>$answer]);
    }
    public function create():View
    {
        $questions = Question::all();
        $answers = Answer::all();
        $users = User::all();
        return view($this->nameViewCrud.'.crud',$this->ViewModel(),['questions'=>$questions,'answers'=>$answers,'users'=>$users]);
    }
    public function store(StoreResurvationRequest $request)
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($id):View
    {
        $data = $this->Model::where('id',$id)->first();
        $questions = Question::all();
        $answers = Answer::all();
        $users = User::all();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data),['questions'=>$questions,'answers'=>$answers,'users'=>$users]);
    }
    public function update(UpdateResurvationRequest $request, $id):RedirectResponse
    {
        $data = $this->Model::find($id);
        app($this->UpdateAction)->handle($data,$request->validated());
        return redirect()->route($this->route)->with('edit',$this->messageUpdate);
    }
    public function destroy($id):RedirectResponse
    {
        $data = $this->Model::find($id);
        $data->delete();
        return redirect()->route($this->route)->with('delete',$this->messageDelete);
    }
}
