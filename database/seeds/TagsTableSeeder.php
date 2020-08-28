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
        DB::table('users')->insert([
            'name' => 'beginer',
        ]);
        DB::table('users')->insert([
            'name' => 'web',
        ]);
        DB::table('users')->insert([
            'name' => 'html',
        ]);
        DB::table('users')->insert([
            'name' => 'css',
        ]);
        DB::table('users')->insert([
            'name' => 'ruby',
        ]);
    }
}
