<?php
namespace App\Actions\PublicTransportation;
use App\Models\PublicTransportation;

class StorePublicTransportationAction
{
    public function handle(array $data): PublicTransportation
    {

        $PublicTransportation = PublicTransportation::create($data);
        return $PublicTransportation;
    }
}

