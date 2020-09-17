<?php

use Illuminate\Database\Seeder;
use App\Model\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\course\Tag::class, 20)->create();
    }
}
