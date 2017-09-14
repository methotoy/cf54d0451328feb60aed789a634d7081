<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->firstname = "John";
        $user->lastname = "Doe";
        $user->contact_number = "+63123123123";
        $user->business_role = "Owner";
        $user->role = "2";
        $user->email = "johndoe@test.com";
        $user->password = crypt("owner", "");
        $user->save();
    }
}
