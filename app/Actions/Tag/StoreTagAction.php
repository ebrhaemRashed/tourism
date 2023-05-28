<?php
namespace App\Actions\Tag;

use App\Models\Tag;
use Illuminate\Support\Str;

class StoreTagAction
{
    public function handle(array $data): Tag
    {
        $Tag = Tag::create($data+['slug'=>Str::slug($data['name']['en'])]);
        return $Tag;
    }
}

