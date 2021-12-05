<?php

namespace Database\Seeders;
use App\Models\Blog;

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $general = new Blog();

            $general->title = "Title 1";
            $general->description = "Description";
            $general->keyword = "key1, key2";
            $general->summary = "Özet";
            $general->image = "image";
            $general->slug = "title-1";
            $general->save();

    }
}
