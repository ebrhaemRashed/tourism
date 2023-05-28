<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class Location extends Model
{
    use HasFactory, HasRoles, HasSpatial, HasTranslations;
    public $translatable = ['name','description'];
    protected $fillable = [
        'name',
        'slug',
        'description',
        'country_id',
        'city_id',
        'district_id',
        'type',
        'price',
        'sort',
        'status',
        'location',
    ];
    const TYPE=['Attractions','Restaurants'];

    public function Location()
    {
        return $this->belongsToMany(Location::class,'group_location')->withTimestamps();
    }

   public function scopeSearch($query):LengthAwarePaginator
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->latest()->paginate(5);
        }else{
        return $query
        ->orwhere('days', 'like' , "%{$search}%")
        ->orwhere('slug', 'like' , "%{$search}%")
        ->orwhere('description', 'like' , "%{$search}%")
        ->orwhere('type', 'like' , "%{$search}%")
        ->orwhere('price', 'like' , "%{$search}%")
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

    protected $casts = [
        'location' => Point::class,
    ];
}
