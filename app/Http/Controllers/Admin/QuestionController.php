<?php
namespace App\Http\Controllers\Admin;

use App\Actions\Question\StoreQuestionAction;
use App\Actions\Question\UpdateQuestionAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Question\StoreQuestionRequest;
use App\Http\Requests\Question\UpdateQuestionRequest;
use App\Models\Question;
use App\ViewModels\QuestionView\QuestionViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class QuestionController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(Question $question){
        $this->Model=$question;
        $this->messageStore='Success Add Question';
        $this->messageUpdate='Update Question';
        $this->messageDelete='Success  Delete Question';
        $this->route='admin.question.index';
        $this->nameViewCrud='admin.question';
        $this->StoreAction=StoreQuestionAction::class;
        $this->UpdateAction=UpdateQuestionAction::class;
    }

    public function ViewModel($data=null): QuestionViewModel
    {
       $ViewMode = new QuestionViewModel($data);
       return $ViewMode;
    }

    public function index():View
    {
        $data = $this->Model::Search();
        return view($this->nameViewCrud.'.view',$this->ViewModel(),compact('data'));
    }
    public function create():View
    {
        return view($this->nameViewCrud.'.crud',$this->ViewModel());
    }
    public function store(StoreQuestionRequest $request)
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($id):View
    {
        $data = $this->Model::where('id',$id)->first();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data));
    }
    public function update(UpdateQuestionRequest $request, $id):RedirectResponse
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
