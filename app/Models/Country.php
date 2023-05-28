<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class Country extends Model
{
    use HasFactory, HasSpatial , HasTranslations,HasRoles;
    public $translatable = ['name'];
    protected $fillable = [
        'name',
        'slug',
        'status',
        'location',
    ];

   public function scopeSearch($query):LengthAwarePaginator
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->latest()->paginate(5);
        }else{
        return $query
        ->orwhere('name', 'like' , "%{$search}%")
        ->orwhere('slug', 'like' , "%{$search}%")
        ->latest()->paginate(5);
        }
   }

    protected $spatialFields = [
        'location',
    ];
    protected $casts = [
        'location' => Point::class,
    ];
    
}