<?php
namespace App\Actions\PublicTransportationCity;
use App\Models\PublicTransportationCity;

class StorePublicTransportationCityAction
{
    public function handle(array $data): PublicTransportationCity
    {
        $PublicTransportationCity = PublicTransportationCity::create($data);
        return $PublicTransportationCity;
    }
}

