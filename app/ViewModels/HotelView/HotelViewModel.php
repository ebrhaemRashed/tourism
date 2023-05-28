<?php
namespace App\ViewModels\HotelView;
use App\Models\Country;
use App\Models\HotelApartment;
use App\Models\TranslationKey;
use Spatie\ViewModels\ViewModel;

class HotelViewModel extends ViewModel
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
        $this->nameView='Hotel';
        $this->IndexView='Index Hotel';
        $this->CreateView='Create Hotel';
        $this->RouteIndex=route('admin.hotel.index');
        $this->RouteCreate=route('admin.hotel.create');
        $this->RouteEdit='admin.hotel.edit';
        $this->RouteDestroy='admin.hotel.destroy';
        // -------name country--------
        $this->HotelApartment = is_null($HotelApartment) ? new HotelApartment(old()) : $HotelApartment;
        $this->type = is_null($HotelApartment)?'Create':'Edit' ;
        $this->translation = TranslationKey::get();
        $this->Country = Country::get(); 
    }

    public function action(): string
    {
        return is_null($this->HotelApartment->id)
            ? route('admin.hotel.store')
            : route('admin.hotel.update', $this->HotelApartment->id);
    }

    public function method(): string
    {
        return is_null($this->HotelApartment->id) ? 'POST' : 'PUT';
    }
}
