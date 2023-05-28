<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'value',
    ];
   public function scopeSearch($query):LengthAwarePaginator
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->paginate(15);
        }else{
        return $query
        ->orwhere('key', 'like' , "%{$search}%")
        ->orwhere('value', 'like' , "%{$search}%")
        ->latest()->paginate(5);
        }
   }
}
