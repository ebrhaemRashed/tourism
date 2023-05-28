<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\District;
use Livewire\Component;

class Location extends Component
{
    public $selectedCountry=null;
    public $filterCity=null;
    public $selectedDistrict;
    public $city=[];
    public $district=[];
    public $CityId;
    public $DistrictShow;
    public $CountryId;
    public $DistrictId;

    public function mount()
    {
        $this->selectedCountry =$this->CountryId;
        $this->filterCity =$this->CityId;
        $this->selectedDistrict =$this->DistrictId;
        $this->city =City::where('country_id',$this->CountryId)->get();
        $this->district=District::where('id',$this->DistrictId)->get();
    }

    public function render()
    {
        $Country=Country::get();
        $City=City::get();
        return view('livewire.location',compact('Country','City'));
    }
    public function updatedSelectedCountry($country_id){
        $this->city=City::where('country_id',$country_id)->get();
    }

    public function updatedFilterCity($cityid){
        $this->district=District::where('city_id',$cityid)->get();
    }
    
}
