<?php
namespace App\Actions\Location\Country;
use App\Models\Country;
use Illuminate\Support\Str;

class UpdateCountryAction
{
    public function handle(Country $Country,array $data): Country
    {
        $Country->update($data+['slug'=>Str::slug($data['name']['en'])]);
        return $Country;
    }
}
