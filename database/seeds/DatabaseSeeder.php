<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(LessonsTableSeeder::class); 
        $this->call(FeedbacksTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(SubreviewsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(CourseUserTableSeeder::class);
        $this->call(CoursesTagTableSeeder::class);
        $this->call(LessonUserTableSeeder::class);
    }
}
