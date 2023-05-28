<?php
namespace App\Actions\Location\City;
use App\Models\City;
use Illuminate\Support\Str;
class StoreCityAction
{
    public function handle(array $data): City
    {
        $City = City::create($data+['slug'=>Str::slug($data['name']['en'])]);
        return $City;
    }
}

