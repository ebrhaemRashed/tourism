<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Resurvation extends Model
{
    use HasFactory;

    protected $table = 'answer_user';
    protected $guarded = [];



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
