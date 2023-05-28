<?php
namespace App\Actions\GroupLocation;
use App\Models\GroupLocation;
class StoreGroupLocationAction
{
    public function handle(array $data): GroupLocation
    {
        $GroupLocation = GroupLocation::create($data);
        return $GroupLocation;
    }
}


