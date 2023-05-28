<?php
namespace App\ViewModels\ApartmentView;
use App\Models\Country;
use App\Models\HotelApartment;
use App\Models\TranslationKey;
use Spatie\ViewModels\ViewModel;

class ApartmentViewModel extends ViewModel
{
    public  $HotelApartment;
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
    public function __construct($HotelApartment = null)
    {
        // -------name country--------
        $this->nameView='Apartment';
        $this->IndexView='Index Apartment';
        $this->CreateView='Create Apartment';
        $this->RouteIndex=route('admin.apartment.index');
        $this->RouteCreate=route('admin.apartment.create');
        $this->RouteEdit='admin.apartment.edit';
        $this->RouteDestroy='admin.apartment.destroy';
        // -------name country--------
        $this->HotelApartment = is_null($HotelApartment) ? new HotelApartment(old()) : $HotelApartment;
        $this->type = is_null($HotelApartment)?'Create':'Edit' ;
        $this->translation = TranslationKey::get();
        $this->Country = Country::get(); 
    }

    public function action(): string
    {
        return is_null($this->HotelApartment->id)
            ? route('admin.apartment.store')
            : route('admin.apartment.update', $this->HotelApartment->id);
    }

    public function method(): string
    {
        return is_null($this->HotelApartment->id) ? 'POST' : 'PUT';
    }
}
