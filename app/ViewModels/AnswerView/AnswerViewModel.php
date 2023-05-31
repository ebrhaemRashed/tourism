<?php
namespace App\ViewModels\AnswerView;

use App\Models\Answer;
use Spatie\ViewModels\ViewModel;

class AnswerViewModel extends ViewModel
{
    public  $Answer;
    public  $type;
    public  $translation;

// -------name country--------
    public $nameView;
    public $IndexView;
    public $CreateView;
    public $RouteIndex;
    public $RouteCreate;
    public $RouteEdit;
    public $RouteDestroy;


    public function __construct($Answer = null)
    {
        
        $this->nameView='Answer';
        $this->IndexView='Index Answer';
        $this->CreateView='Create Answer';
        $this->RouteIndex=route('admin.answer.index');
        $this->RouteCreate=route('admin.answer.create');
        $this->RouteEdit='admin.answer.edit';
        $this->RouteDestroy='admin.answer.destroy';

        $this->Answer = is_null($Answer) ? new Answer(old()) : $Answer;
        $this->type = is_null($Answer)?'Create':'Edit' ;
    }

    public function action(): string
    {
        return is_null($this->Answer->id)
            ? route('admin.answer.store')
            : route('admin.answer.update', $this->Answer->id);
    }

    public function method(): string
    {
        return is_null($this->Answer->id) ? 'POST' : 'PUT';
    }
}
