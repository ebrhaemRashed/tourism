<?php
namespace App\Actions\Users;

use App\Helper\ImageHelper;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StoreUsersAction
{
    use ImageHelper;
    public function handle(array $data): User
    {
        $data['password'] = Hash::make($data['password']);
        $user = User::create((Arr::except($data+['slug'=>Str::slug($data['name']['en'])], 'image')));
        $this->StoreImage($data,$user,'user');
        return $user;
    }
}

