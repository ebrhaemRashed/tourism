<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        protected $model = Admin::class;
    public function run()
    {
        DB::table('admins')->delete();
        $admin=Admin::create([
            'name' => 'Admin',
            'slug'=>Str::slug('Admin'),
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'), // password
            'remember_token' => null,
            'status' => 'Active',
            'created_at'=>now() ,
        ]);
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $admin->assignRole([$role->id]);
        Admin::factory()->count(10)->create();
    }
}
