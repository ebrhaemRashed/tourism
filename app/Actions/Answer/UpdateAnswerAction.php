<?php
namespace App\Actions\Answer;
use App\Models\Answer;

class UpdateAnswerAction
{
    public function handle(Answer $Answer,array $data): Answer
    {
        $Answer->update($data);
        return $Answer;
    }
}
