<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
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
        $facker = Faker::create();
        for($i=1; $i<=200; $i++){
            $user = new User;
            $user->name = $facker->name;
            $user->email = $facker->email;
            $user->password = Hash::make($facker->password);
            $user->save();
        }
    }
}
