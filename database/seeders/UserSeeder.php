<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*         $user = new User();
        $user->name = 'admin';
        $user->email = 'manuelsansoresg@gmail.com';
        $user->password = Hash::make('*25#7vCgJ$nK');
        $user->save(); */

        $user = new User();
        $user->name = 'cuponesatractivos';
        $user->email = 'cuponesatractivos@gmail.com';
        $user->password = Hash::make('12345');
        $user->save();
    }
}
