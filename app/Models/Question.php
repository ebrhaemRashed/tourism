<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $guarded = [];


    public function answers(){
        return $this->hasMany('App\Models\Answer','question_id');
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
