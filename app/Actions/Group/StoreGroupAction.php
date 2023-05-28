<?php
namespace App\Actions\Group;
use App\Models\Group;
use Illuminate\Support\Str;

class StoreGroupAction
{
    public function handle(array $data): Group
    {
        $Group = Group::create($data+['slug'=>Str::slug($data['name']['en'])]);
        return $Group;
    }
}

