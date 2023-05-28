<?php
namespace App\Actions\Location\District;
use App\Models\District;
use Illuminate\Support\Str;

class UpdateDistrictAction
{
    public function handle(District $District,array $data): District
    {
        $District->update($data+['slug'=>Str::slug($data['name']['en'])]);
        return $District;
    }
}
