<?php

namespace App\Models;

use App\Models\Group;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class Tag extends Model
{
    use HasFactory , HasRoles, HasTranslations;
    public $translatable = ['name','description'];
    
    protected $fillable = [
        'name',
        'slug',
        'description',
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
        ->orwhere('name', 'like' , "%{$search}%")
        ->orwhere('slug', 'like' , "%{$search}%")
        ->orwhere('description', 'like' , "%{$search}%")
        ->orwhere('status', 'like' , "%{$search}%")
        ->latest()->paginate(5);
        }
   }
    public function Group()
    {
        return $this->belongsToMany(Group::class,'tag_group')->withTimestamps();
    }
}
