<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "Revan Rionaldo";
        $user->email = "devanrld@gmail.com";
        $user->address = "Bangkok";
        $user->phone_number = "08062007";
        $user->password = bcrypt('password'); 
        $user->role = "admin";
        $user->save();

        $user = new User;
        $user->name = "Deandra";
        $user->email = "dean@gmail.com";
        $user->address = "Indonesia";
        $user->phone_number = "20070806";
        $user->password = bcrypt('dean'); 
        $user->role = "user";
        $user->save();
    }
}
