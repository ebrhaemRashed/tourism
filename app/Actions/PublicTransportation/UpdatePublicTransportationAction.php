<?php
namespace App\Actions\PublicTransportation;
use App\Models\PublicTransportation;

class UpdatePublicTransportationAction
{
    public function handle(PublicTransportation $PublicTransportation,array $data): PublicTransportation
    {
        $PublicTransportation->update($data);
        return $PublicTransportation;
    }
}
