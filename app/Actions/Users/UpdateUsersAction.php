<?php
namespace App\Actions\Users;

use App\Helper\ImageHelper;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UpdateUsersAction
{
    use ImageHelper;
    public function handle(User $user,array $data): User
    {
        if(!empty($data['password'])){
            $data['password'] = Hash::make($data['password']);
            $user->update(Arr::except($data+['slug'=>Str::slug($data['name']['en'])], 'image'));
        }else{
            $user->update(Arr::except($data+['slug'=>Str::slug($data['name']['en'])], 'password','image'));
        }
        $this->UpdateImage($data,$user,'user');
        return $user;
    }
}

