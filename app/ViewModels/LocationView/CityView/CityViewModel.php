<?php
namespace App\ViewModels\LocationView\CityView;
use App\Models\City;
use App\Models\Country;
use App\Models\TranslationKey;
use Spatie\ViewModels\ViewModel;

class CityViewModel extends ViewModel
{
    public  $City;
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
    public function __construct($City = null)
    {
        // -------name country--------
        $this->nameView='City';
        $this->IndexView='Index City';
        $this->CreateView='Create City';
        $this->RouteIndex=route('admin.city.index');
        $this->RouteCreate=route('admin.city.create');
        $this->RouteEdit='admin.city.edit';
        $this->RouteDestroy='admin.city.destroy';
        // -------name country--------
        $this->City = is_null($City) ? new City(old()) : $City;
        $this->type = is_null($City)?'Create':'Edit' ;
        $this->translation = TranslationKey::get();
        $this->Country = Country::get(); 
    }

    public function action(): string
    {
        return is_null($this->City->id)
            ? route('admin.city.store')
            : route('admin.city.update', $this->City->id);
    }

    public function method(): string
    {
        return is_null($this->City->id) ? 'POST' : 'PUT';
    }
}
