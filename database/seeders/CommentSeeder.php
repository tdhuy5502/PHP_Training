<?php

namespace Database\Seeders;

use App\Models\Posts;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Posts::all()->each(function($post){
            $post->comments()->saveMany(Comment::factory()->count(2)->make());
        });
    }
}
