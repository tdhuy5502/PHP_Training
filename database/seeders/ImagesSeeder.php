<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\Posts;
use App\Models\User;
use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Users::all()->each(
        function($user){
            $user->images()->saveMany(Images::factory()->count(2)->make());
        }
        );


        Posts::all()->each(function($post){
            $post->images()->saveMany(Images::factory()->count(2)->make());
        });
    }
}
