<?php
namespace App\Actions\Resurvation;
use App\Models\Resurvation;

class UpdateResurvationAction
{
    public function handle(Resurvation $Resurvation,array $data): Resurvation
    {
        $Resurvation->update($data);
        return $Resurvation;
    }
}
