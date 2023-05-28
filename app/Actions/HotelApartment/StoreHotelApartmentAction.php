<?php
namespace App\Actions\HotelApartment;

use App\Models\HotelApartment;
use Illuminate\Support\Str;
class StoreHotelApartmentAction
{
    public function handle(array $data): HotelApartment
    {
        $HotelApartment = HotelApartment::create($data+['slug'=>Str::slug($data['name']['en'])]);
        return $HotelApartment;
    }
}

