<?php
namespace App\Actions\Answer;
use App\Models\Answer;
use App\Helper\ImageHelper;
use Illuminate\Support\Arr;


class StoreAnswerAction
{
    use ImageHelper;
    public function handle(array $data): Answer
    {
       
        $Answer = Answer::create(Arr::except($data, 'image'));
        $this->StoreImage($data,$Answer,'answer');
        return $Answer;
    }
}

