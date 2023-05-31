<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

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



    public function scopeSearch($query):LengthAwarePaginator
    {
        $search = Request()->query('name');
        if(empty($search)){
            return $query->latest()->paginate(5);
        }else{
            return $query->latest()->paginate(5);;
        }

    }
}
