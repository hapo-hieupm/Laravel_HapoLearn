<?php

use Illuminate\Database\Seeder;
use App\Model\User;

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
            'password' => bcrypt('12345678'),
            'role' => '1',
        ]);

        factory(App\course\User::class, 20)->create();
    }
}
