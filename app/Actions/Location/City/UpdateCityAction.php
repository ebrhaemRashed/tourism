<?php
namespace App\Actions\Location\City;
use App\Models\City;
use Illuminate\Support\Str;

class UpdateCityAction
{
    public function handle(City $City,array $data): City
    {
        $City->update($data+['slug'=>Str::slug($data['name']['en'])]);
        return $City;
    }
}
