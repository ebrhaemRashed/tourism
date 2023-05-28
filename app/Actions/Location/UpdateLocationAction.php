<?php
namespace App\Actions\location;

use App\Models\Location;
use Illuminate\Support\Str;
class UpdateLocationAction
{
    public function handle(Location $Location,array $data): Location
    {
        $Location->update($data+['slug'=>Str::slug($data['name']['en'])]);
        return $Location;
    }
}
