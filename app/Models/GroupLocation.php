<?php

namespace App\Models;

use App\Models\Group;
use App\Models\Location;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class GroupLocation extends Model
{
    use HasFactory, HasRoles;

    public $table="group_location";
    protected $fillable = [
        'location_id',
        'group_id',
    ];
    
    public function Group()
    {
      return $this->belongsTo(Group::class,'group_id');
    }
    public function Location()
    {
      return $this->belongsTo(Location::class,'location_id');
    }
   public function scopeSearch($query):LengthAwarePaginator
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->latest()->paginate(5);
        }else{
        return $query
        ->orwhere('location_id', 'like' , "%{$search}%")
        ->orwhere('group_id', 'like' , "%{$search}%")
        ->latest()->paginate(5);
        }
   }
   
}

