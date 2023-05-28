<?php
namespace App\Actions\Cars;

use App\Models\Cars;
use Illuminate\Support\Str;

class UpdateCarAction
{
    public function handle(Cars $Cars,array $data): Cars
    {
        $Cars->update($data+['slug'=>Str::slug($data['name']['en'])]);
        return $Cars;
    }
}
