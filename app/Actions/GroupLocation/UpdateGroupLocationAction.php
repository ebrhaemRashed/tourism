<?php
namespace App\Actions\GroupLocation;
use App\Models\GroupLocation;
class UpdateGroupLocationAction
{
    public function handle(GroupLocation $GroupLocation,array $data): GroupLocation
    {
        $GroupLocation->update($data);
        return $GroupLocation;
    }
}
