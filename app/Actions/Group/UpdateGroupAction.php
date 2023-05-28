<?php
namespace App\Actions\Group;

use App\Models\Group;
use Illuminate\Support\Str;

class UpdateGroupAction
{
    public function handle(Group $Group,array $data): Group
    {
        $Group->update($data+['slug'=>Str::slug($data['name']['en'])]);
        return $Group;
    }
}
