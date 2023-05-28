<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class HotelApartment extends Model
{
    use HasFactory, HasRoles, HasSpatial, HasTranslations;

    public $translatable = ['name','description'];
    
    protected $fillable = [
        'name',
        'slug',
        'country_id',
        'city_id',
        'district_id',
        'stars',
        'rooms',
        'price',
        'typing_live',
        'type',
        'status',
        'sort',
        'location',
    ];

   public function scopeSearchHotel($query):LengthAwarePaginator
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->where('type','Hotel')->latest()->paginate(5);
        }else{
        return $query
        ->where('type','Hotel')
        ->orwhere('name', 'like' , "%{$search}%")
        ->orwhere('slug', 'like' , "%{$search}%")
        ->orwhere('stars', 'like' , "%{$search}%")
        ->orwhere('rooms', 'like' , "%{$search}%")
        ->orwhere('price', 'like' , "%{$search}%")
        ->orwhere('typing_live', 'like' , "%{$search}%")
        ->orwhere('type', 'like' , "%{$search}%")
        ->orwhere('status', 'like' , "%{$search}%")
        ->latest()->paginate(5);
        }
   }
   
   public function scopeSearchApartment($query):LengthAwarePaginator
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->where('type','Apartment')->latest()->paginate(5);
        }else{
        return $query
        ->where('type','Apartment')
        ->orwhere('name', 'like' , "%{$search}%")
        ->orwhere('slug', 'like' , "%{$search}%")
        ->orwhere('stars', 'like' , "%{$search}%")
        ->orwhere('rooms', 'like' , "%{$search}%")
        ->orwhere('price', 'like' , "%{$search}%")
        ->orwhere('typing_live', 'like' , "%{$search}%")
        ->orwhere('type', 'like' , "%{$search}%")
        ->orwhere('status', 'like' , "%{$search}%")
        ->latest()->paginate(5);
        }
   }
    public function Country()
    {
      return $this->belongsTo(Country::class,'country_id');
    }
    public function City()
    {
      return $this->belongsTo(City::class,'city_id');
    }
    public function District()
    {
      return $this->belongsTo(District::class,'district_id');
    }
    
    const TYPE =['Hotel','Apartment'];
    const TYPINGLIVE =['city','village'];
    protected $casts = [
        'location' => Point::class,
    ];
}
