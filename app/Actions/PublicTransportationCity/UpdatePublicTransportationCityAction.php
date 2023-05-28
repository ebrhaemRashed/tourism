<?php
namespace App\Actions\PublicTransportationCity;
use App\Models\PublicTransportationCity;

class UpdatePublicTransportationCityAction
{
    public function handle(PublicTransportationCity $PublicTransportationCity,array $data): PublicTransportationCity
    {
        $PublicTransportationCity->update($data);
        return $PublicTransportationCity;
    }
}
