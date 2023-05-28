<?php
namespace App\Actions\location;

use App\Models\Location;
use Illuminate\Support\Str;
class StoreLocationAction
{
    public function handle(array $data): Location
    {
        $Location = Location::create($data+['slug'=>Str::slug($data['name']['en'])]);
        return $Location;
    }
}

