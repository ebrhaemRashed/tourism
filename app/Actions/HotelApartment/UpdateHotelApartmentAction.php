<?php
namespace App\Actions\HotelApartment;
use App\Models\HotelApartment;
use Illuminate\Support\Str;

class UpdateHotelApartmentAction
{
    public function handle(HotelApartment $HotelApartment,array $data): HotelApartment
    {
        $HotelApartment->update($data+['slug'=>Str::slug($data['name']['en'])]);
        return $HotelApartment;
    }
}
