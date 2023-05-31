<?php
namespace App\ViewModels\QuestionView;

use App\Models\Question;
use Spatie\ViewModels\ViewModel;

class QuestionViewModel extends ViewModel
{
    public  $Question;
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


    public function __construct($Question = null)
    {
        
        $this->nameView='Question';
        $this->IndexView='Index Question';
        $this->CreateView='Create Question';
        $this->RouteIndex=route('admin.question.index');
        $this->RouteCreate=route('admin.question.create');
        $this->RouteEdit='admin.question.edit';
        $this->RouteDestroy='admin.question.destroy';

        $this->Question = is_null($Question) ? new Question(old()) : $Question;
        $this->type = is_null($Question)?'Create':'Edit' ;
    }

    public function action(): string
    {
        return is_null($this->Question->id)
            ? route('admin.question.store')
            : route('admin.question.update', $this->Question->id);
    }

    public function method(): string
    {
        return is_null($this->Question->id) ? 'POST' : 'PUT';
    }
}
