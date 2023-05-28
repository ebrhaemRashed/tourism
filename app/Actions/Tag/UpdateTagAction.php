<?php
namespace App\Actions\Tag;

use App\Models\Tag;
use Illuminate\Support\Str;

class UpdateTagAction
{
    public function handle(Tag $Tag,array $data): Tag
    {
        $Tag->update($data+['slug'=>Str::slug($data['name']['en'])]);
        return $Tag;
    }
}
