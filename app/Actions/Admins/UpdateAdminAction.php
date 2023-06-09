<?php
namespace App\Actions\Admins;

use App\Helper\ImageHelper;
use App\Models\Admin;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdateAdminAction
{
    use ImageHelper;
    public function handle(Admin $admin,array $data): Admin
    {
        if(!empty($data['password'])){
            $data['password'] = Hash::make($data['password']);
            $admin->update(Arr::except($data, 'image'));
        }else{
            $admin->update(Arr::except($data, 'password','image'));
        }
        DB::table('model_has_roles')->where('model_id',$admin->id)->delete();
        isset($data['roles'])?$admin->assignRole($data['roles']):'';
        $this->UpdateImage($data,$admin,'admin');
        return $admin;
    }
}
