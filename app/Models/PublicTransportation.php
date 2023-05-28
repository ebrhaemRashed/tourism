<?php

namespace App\Models;

use App\Models\City;
use App\Models\Country;
use App\Models\District;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class PublicTransportation extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [
        'country_id',
        'city_id',
        'district_id',
        'days',
        'price',
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
        ->orwhere('days', 'like' , "%{$search}%")
        ->orwhere('price', 'like' , "%{$search}%")
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
    
}