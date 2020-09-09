<?php

use Illuminate\Database\Seeder;
use app\Model\CourseUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_user')->insert([
            'course_id' => '15',
            'user_id' => '1',
        ]);
        DB::table('course_user')->insert([
            'course_id' => '15',
            'user_id' => '2',
        ]);
        DB::table('course_user')->insert([
            'course_id' => '15',
            'user_id' => '3',
        ]);
        DB::table('course_user')->insert([
            'course_id' => '16',
            'user_id' => '1',
        ]);
        DB::table('course_user')->insert([
            'course_id' => '17',
            'user_id' => '1',
        ]);
        // $this->call(UsersTableSeeder::class);
        // $this->call(CoursesTableSeeder::class);
        // $this->call(LessonsTableSeeder::class); 
        // $this->call(FeedbacksTableSeeder::class);
        // $this->call(MediaTableSeeder::class);
        // $this->call(SubreviewsTableSeeder::class);
        // $this->call(TagsTableSeeder::class);
        // $this->call(CourseUserTableSeeder::class);
        // $this->call(CoursesTagsTableSeeder::class);
        // $this->call(LessonUserTableSeeder::class);
    }
}

