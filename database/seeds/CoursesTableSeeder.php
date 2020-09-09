<?php

use Illuminate\Database\Seeder;
use App\Model\Course;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        $limit = 6;
        $courses = ['HTML/CSS/js', 'LARAVEL', 'PHP', 'CSS', 'Ruby on rails', 'Java'];
        for ($i = 0; $i < $limit; $i++) {
            Courses::create([
                'name' => $courses[i],
                'description' => 'I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.',
                'price' => '100',
            ]);
        }       
    }
}