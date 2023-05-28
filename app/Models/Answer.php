<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $table = 'answers';
    protected $guarded = [];

    public function question(){
        return $this->belongsTo('App\Models\Question','question_id');
    }


    public function users(){
        return $this->belongsToMany('App\Models\User','answer_id','user_id');
    }
}
