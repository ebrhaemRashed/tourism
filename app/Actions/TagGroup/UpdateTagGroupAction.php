<?php
namespace App\Actions\TagGroup;

use App\Models\TagGroup;

class UpdateTagGroupAction
{
    public function handle(TagGroup $TagGroup,array $data): TagGroup
    {
        $TagGroup->update($data);
        return $TagGroup;
    }
}
