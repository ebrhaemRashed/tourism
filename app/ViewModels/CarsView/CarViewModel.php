<?php
namespace App\ViewModels\CarsView;
use App\Models\Cars;
use App\Models\Country;
use App\Models\TranslationKey;
use Spatie\ViewModels\ViewModel;

class CarViewModel extends ViewModel
{
    public  $Cars;
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
    public $Country;
// -------name country--------
    public function __construct($Cars = null)
    {
        // -------name country--------
        $this->nameView='Cars';
        $this->IndexView='Index Cars';
        $this->CreateView='Create Cars';
        $this->RouteIndex=route('admin.cars.index');
        $this->RouteCreate=route('admin.cars.create');
        $this->RouteEdit='admin.cars.edit';
        $this->RouteDestroy='admin.cars.destroy';
        // -------name country--------
        $this->Cars = is_null($Cars) ? new Cars(old()) : $Cars;
        $this->type = is_null($Cars)?'Create':'Edit' ;
        $this->translation = TranslationKey::get();
        $this->Country = Country::get(); 
    }

    public function action(): string
    {
        return is_null($this->Cars->id)
            ? route('admin.cars.store')
            : route('admin.cars.update', $this->Cars->id);
    }

    public function method(): string
    {
        return is_null($this->Cars->id) ? 'POST' : 'PUT';
    }
}
