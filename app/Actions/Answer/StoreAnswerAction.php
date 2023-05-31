<?php
namespace App\Actions\Answer;
use App\Models\Answer;

class StoreAnswerAction
{
    public function handle(array $data): Answer
    {

        $Answer = Answer::create($data);
        return $Answer;
    }
}

