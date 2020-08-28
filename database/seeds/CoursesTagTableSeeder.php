<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('course_tag')->insert([
                'name' => 'name'.Str::random(5),
                'email' => 'email'.Str::random(5).'@gmail.com',
                'password' => Hash::make('password'),
                'username'=> 'username'.Str::random(5),
                'remember_token' =>Str::random(10)
            ]);
        }
    }
}
