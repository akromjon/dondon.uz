<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole = Role::where('name', 'admin')->first();
        $superAdminRole=Role::where('name','super-admin')->first(); 
        $superAdmin = User::create(
            [
                'name' => 'Akrom Numonov',
                'phone_number' => '998990005303',
                'password' => Hash::make('admingamerrr')
            ]
        );
        $admin = User::create(
            [
                'name' => 'Admin User',
                'phone_number' => '998901001010',
                'password' => Hash::make('admin-gamerrr')
            ]
        );                
        $superAdmin->roles()->attach($superAdminRole);
        $admin->roles()->attach($adminRole);  
    }
}
