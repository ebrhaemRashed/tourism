<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class PublicTransportationCity extends Model
{
    use HasFactory, HasRoles;
    protected $fillable = [
        'price',
        'type',
        'city_from',
        'city_to',
        'status',
        'sort',
    ];

   public function scopeSearch($query):LengthAwarePaginator
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->latest()->paginate(5);
        }else{
        return $query
        ->orwhere('price', 'like' , "%{$search}%")
        ->orwhere('type', 'like' , "%{$search}%")
        ->orwhere('city_from', 'like' , "%{$search}%")
        ->orwhere('city_to', 'like' , "%{$search}%")
        ->latest()->paginate(5);
        }
   }
    const TYPE = ['Train','Plan','Bus','Transfer']; 
}