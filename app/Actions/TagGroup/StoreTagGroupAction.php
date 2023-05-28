<?php
namespace App\Actions\TagGroup;

use App\Models\TagGroup;

class StoreTagGroupAction
{
    public function handle(array $data): TagGroup
    {
        $TagGroup = TagGroup::create($data);
        return $TagGroup;
    }
}

