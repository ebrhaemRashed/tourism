<?php
namespace App\Actions\Question;
use App\Models\Question;

class StoreQuestionAction
{
    public function handle(array $data): Question
    {

        $Question = Question::create($data);
        return $Question;
    }
}

