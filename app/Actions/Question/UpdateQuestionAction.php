<?php
namespace App\Actions\Question;
use App\Models\Question;

class UpdateQuestionAction
{
    public function handle(Question $Question,array $data): Question
    {
        $Question->update($data);
        return $Question;
    }
}
