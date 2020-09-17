<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\course\Course::class, 20)->create();      
    }
}
