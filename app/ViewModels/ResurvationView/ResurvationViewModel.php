<?php
namespace App\ViewModels\ResurvationView;

use App\Models\Resurvation;
use Spatie\ViewModels\ViewModel;

class ResurvationViewModel extends ViewModel
{
    public  $Resurvation;
    public  $type;
    public  $translation;


    public $nameView;
    public $IndexView;
    public $CreateView;
    public $RouteIndex;
    public $RouteCreate;
    public $RouteEdit;
    public $RouteDestroy;


    public function __construct($Resurvation = null)
    {
        
        $this->nameView='Resurvation';
        $this->IndexView='Index Resurvation';
        $this->CreateView='Create Resurvation';
        $this->RouteIndex=route('admin.resurvation.index');
        $this->RouteCreate=route('admin.resurvation.create');
        $this->RouteEdit='admin.resurvation.edit';
        $this->RouteDestroy='admin.resurvation.destroy';

        $this->Resurvation = is_null($Resurvation) ? new Resurvation(old()) : $Resurvation;
        $this->type = is_null($Resurvation)?'Create':'Edit' ;
    }

    public function action(): string
    {
        return is_null($this->Resurvation->id)
            ? route('admin.resurvation.store')
            : route('admin.resurvation.update', $this->Resurvation->id);
    }

    public function method(): string
    {
        return is_null($this->Resurvation->id) ? 'POST' : 'PUT';
    }
}
