<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Muhammad Rifan Setiawan',
            'email' => 'mrifansetiawan@gmail.com',
            'phone_number' => '08995249354',
            'password' => bcrypt('123456')
        ]);
    }
}
