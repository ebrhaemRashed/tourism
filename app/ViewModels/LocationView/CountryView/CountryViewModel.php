<?php
namespace App\ViewModels\LocationView\CountryView;
use App\Models\Country;
use App\Models\TranslationKey;
use Spatie\ViewModels\ViewModel;

class CountryViewModel extends ViewModel
{
    public  $Country;
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
// -------name country--------
    public function __construct($Country = null)
    {
        // -------name country--------
        $this->nameView='Country';
        $this->IndexView='Index Country';
        $this->CreateView='Create Country';
        $this->RouteIndex=route('admin.country.index');
        $this->RouteCreate=route('admin.country.create');
        $this->RouteEdit='admin.country.edit';
        $this->RouteDestroy='admin.country.destroy';
        // -------name country--------
        $this->Country = is_null($Country) ? new Country(old()) : $Country;
        $this->type = is_null($Country)?'Create':'Edit' ;
        $this->translation = TranslationKey::get();
    }

    public function action(): string
    {
        return is_null($this->Country->id)
            ? route('admin.country.store')
            : route('admin.country.update', $this->Country->id);
    }

    public function method(): string
    {
        return is_null($this->Country->id) ? 'POST' : 'PUT';
    }
}
