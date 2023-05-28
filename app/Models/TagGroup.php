<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\Permission\Traits\HasRoles;

class TagGroup extends Model
{
    use HasFactory , HasRoles;
    public $table="tag_group";
    protected $fillable = [
        'tag_id',
        'group_id',
    ];

    public function Group()
    {
      return $this->belongsTo(Group::class,'group_id');
    }
    public function Tag()
    {
      return $this->belongsTo(Tag::class,'tag_id');
    }
   public function scopeSearch($query):LengthAwarePaginator
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->latest()->paginate(5);
        }else{
        return $query
        ->orwhere('tag_id', 'like' , "%{$search}%")
        ->orwhere('group_id', 'like' , "%{$search}%")
        ->latest()->paginate(5);
        }
   }
    
}
