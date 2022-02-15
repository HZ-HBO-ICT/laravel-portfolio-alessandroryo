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
        Blog::factory(95)->create();
        // Hard Coding
//        DB::table('blogs')->insert([
//            'title' => Str::random(5),
//            'excerpt' => Str::random(20),
//            'image_path' => 'title',
//            'image_alt' => 'title'.'Alessandro Ryo'
//        ]);
    }
}
