<?php
namespace App\Actions\Answer;

use App\Helper\ImageHelper;
use App\Models\Answer;
use Illuminate\Support\Arr;


class UpdateAnswerAction
{
    use ImageHelper;
    public function handle(Answer $Answer,array $data): Answer
    {

        $Answer->update(Arr::except($data,'image'));
        $this->UpdateImage($data,$Answer,'answer');

        return $Answer;
    }
}
