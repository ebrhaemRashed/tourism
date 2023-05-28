<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class Group extends Model
{
    use HasFactory , HasRoles, HasTranslations;
    public $translatable = ['name','description'];
    
    protected $fillable = [
        'name',
        'slug',
        'description',
        'sort',
        'must_seen',
        'status',
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
        ->orwhere('must_seen', 'like' , "%{$search}%")
        ->orwhere('status', 'like' , "%{$search}%")
        ->latest()->paginate(5);
        }
   }
    const MUSTSEEN =['seen','Not Seen'];

    public function Tag()
    {
        return $this->belongsToMany(Tag::class,'tag_group')->withTimestamps();
    }

    public function Group()
    {
        return $this->belongsToMany(Group::class,'group_location')->withTimestamps();
    }
    
}
