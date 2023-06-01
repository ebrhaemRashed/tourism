<?php
namespace App\Http\Controllers\Admin;

use App\Actions\Answer\StoreAnswerAction;
use App\Actions\Answer\UpdateAnswerAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Answer\StoreAnswerRequest;
use App\Http\Requests\Answer\UpdateAnswerRequest;
use App\Models\Answer;
use App\Models\Question;
use App\ViewModels\AnswerView\AnswerViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class AnswerController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(Answer $Answer){
        $this->Model=$Answer;
        $this->messageStore='Success Add Answer';
        $this->messageUpdate='Update Answer';
        $this->messageDelete='Success  Delete Answer';
        $this->route='admin.answer.index';
        $this->nameViewCrud='admin.answer';
        $this->StoreAction=StoreAnswerAction::class;
        $this->UpdateAction=UpdateAnswerAction::class;
    }

    public function ViewModel($data=null): AnswerViewModel
    {
       $ViewMode = new AnswerViewModel($data);
       return $ViewMode;
    }

    public function index():View
    {
        $data = $this->Model::Search();
        return view($this->nameViewCrud.'.view',$this->ViewModel(),compact('data'));
    }
    public function create():View
    {
        $questions = Question::all();
        return view($this->nameViewCrud.'.crud',$this->ViewModel(),['questions'=>$questions]);
    }
    public function store(StoreAnswerRequest $request)
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($id):View
    {
        $questions= Question::all();
        $data = $this->Model::where('id',$id)->first();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data),['questions'=>$questions]);
    }
    public function update(UpdateAnswerRequest $request, $id):RedirectResponse
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
