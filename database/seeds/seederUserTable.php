<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class seederUserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user=Role::where('nombre','user')->first();
        $role_admin=Role::where('nombre','admin')->first();
    
        $user= new User();
        $user->name="User";
        $user->email="user@user.com";
        $user->password=bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_user);


        $user= new User();
        $user->name="Admin";
        $user->email="admin@admin.com";
        $user->password=bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_admin);
    }




}
