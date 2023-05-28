<?php
namespace App\Actions\Admins;

use App\Helper\ImageHelper;
use App\Models\Admin;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class StoreAdminAction
{
    use ImageHelper;
    public function handle(array $data): Admin
    {

        $data['password'] = Hash::make($data['password']);
        $admin = Admin::create((Arr::except($data, 'image')));
        isset($data['roles'])?$admin->assignRole($data['roles']):'';
        $this->StoreImage($data,$admin,'admin');
        return $admin;
    }
}



