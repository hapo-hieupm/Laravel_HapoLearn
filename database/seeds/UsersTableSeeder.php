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
        User::create([
            'name' => 'Hapo Tester',
            'username' => 'Hapo_Tester',
            'email' => 'test@haposoft.com',
            'password' => bcrypt('12345678')
        ]);

        $limit = 5;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'name' => 'name '.Str::random(5),
                'email' => 'email'.Str::random(5).'@gmail.com',
                'password' => '1234abcd',
                'username'=> 'username'.Str::random(5),
            ]);
        }
    }
}
