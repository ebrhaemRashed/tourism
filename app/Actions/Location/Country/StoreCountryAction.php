<?php
namespace App\Actions\Location\Country;
use App\Models\Country;
use Illuminate\Support\Str;

class StoreCountryAction
{
    public function handle(array $data): Country
    {
        $Country = Country::create($data+['slug'=>Str::slug($data['name']['en'])]);
        return $Country;
    }
}

