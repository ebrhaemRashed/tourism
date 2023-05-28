<?php
namespace App\Actions\Cars;
use App\Models\Cars;
use Illuminate\Support\Str;
class StoreCarAction
{
    public function handle(array $data): Cars
    {
        $Cars = Cars::create($data+['slug'=>Str::slug($data['name']['en'])]);
        return $Cars;
    }
}

