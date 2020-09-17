<?php

use Illuminate\Database\Seeder;
use App\Moldel\Lesson;

class LessonsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\course\Lesson::class, 20)->create();    
    }
}
