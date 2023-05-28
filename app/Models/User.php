<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class User extends Authenticatable implements  HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, HasSpatial, HasRoles, InteractsWithMedia, HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // public $translatable = ['name'];
    // protected $fillable = [
    //     'name',
    //     'slug',
    //     'email',
    //     'address',
    //     'mobile',
    //     'gender',
    //     'location',
    //     'country_id',
    //     'city_id',
    //     'district_id',
    //     'status',
    //     'password',
    // ];
    protected $guarded = [];

   public function scopeSearch($query):LengthAwarePaginator
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->orderBy('id','asc')->latest()->paginate(5);
        }else{
        return $query
        ->orWhere('name', 'like' , "%{$search}%")
        ->orWhere('slug', 'like' , "%{$search}%")
        ->orWhere('address', 'like' , "%{$search}%")
        ->orWhere('mobile', 'like' , "%{$search}%")
        ->orWhere('gender', 'like' , "%{$search}%")
        ->orWhere('email', 'like' , "%{$search}%")
        ->orWhere('status', 'like' , "%{$search}%")
        ->orderBy('id','asc')->latest()->paginate(5);
        }
   }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'location' => Point::class,
        'email_verified_at' => 'datetime',
    ];
    // public function getActivitylogOptions(): LogOptions
    // {
    //     return LogOptions::defaults();
    // }



    public function answers(){
        return $this->belongsToMany('App\Models\Answer','user_id','answer_id');
    }
}
