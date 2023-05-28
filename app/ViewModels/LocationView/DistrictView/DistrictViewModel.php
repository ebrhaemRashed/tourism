<?php
namespace App\ViewModels\LocationView\DistrictView;

use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\TranslationKey;
use Spatie\ViewModels\ViewModel;

class DistrictViewModel extends ViewModel
{
    public  $District;
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
    public $City;
// -------name country--------
    public function __construct($District = null)
    {
        // -------name country--------
        $this->nameView='District';
        $this->IndexView='Index District';
        $this->CreateView='Create District';
        $this->RouteIndex=route('admin.district.index');
        $this->RouteCreate=route('admin.district.create');
        $this->RouteEdit='admin.district.edit';
        $this->RouteDestroy='admin.district.destroy';
        // -------name country--------
        $this->District = is_null($District) ? new District(old()) : $District;
        $this->type = is_null($District)?'Create':'Edit' ;
        $this->translation = TranslationKey::get();
        $this->Country = Country::get(); 
        $this->City = City::get(); 
    }

    public function action(): string
    {
        return is_null($this->District->id)
            ? route('admin.district.store')
            : route('admin.district.update', $this->District->id);
    }

    public function method(): string
    {
        return is_null($this->District->id) ? 'POST' : 'PUT';
    }
}
