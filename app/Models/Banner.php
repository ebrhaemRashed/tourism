<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class Banner extends Model implements  HasMedia
{
    use HasTranslations, HasRoles, InteractsWithMedia  ;

    public $translatable = ['name'];

    protected $fillable = [
        'name',
        'slug',
        'status',
    ];
    
   public function scopeSearch($query):LengthAwarePaginator
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->orderBy('id','asc')->paginate(10);
        }else{
        return $query
        ->orWhere('name', 'like' , "%{$search}%")
        ->orWhere('slug', 'like' , "%{$search}%")
        ->orderBy('id','asc')->paginate(10);
        }
   }
}
