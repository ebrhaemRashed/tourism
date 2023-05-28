<?php
namespace App\Actions\Location\District;
use App\Models\District;
use Illuminate\Support\Str;
class StoreDistrictAction
{
    public function handle(array $data): District
    {
        $District = District::create($data+['slug'=>Str::slug($data['name']['en'])]);
        return $District;
    }
}

