<?php
namespace App\Actions\Resurvation;
use App\Models\Resurvation;

class StoreResurvationAction
{
    public function handle(array $data): Resurvation
    {

        $Resurvation = Resurvation::create($data);
        return $Resurvation;
    }
}

