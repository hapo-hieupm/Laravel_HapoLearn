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

            if ($i==1) {
                DB::table('users')->insert([
                    'description' => 'Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique', 
                    'experience' => random_int(1,5),
                    'slack' => 'hapo@slack.com',
                    'facebook'=> 'hapo@facebook.com',
                ]);
            }
        }
    }
}
