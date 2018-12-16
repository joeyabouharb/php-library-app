<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => "Sci-Fi",
            'description' => "Stories ranging from space adventures to time travel shenanigans!"
        ]);

        DB::table('genres')->insert([
            'name' => "Fantasy",
            'description' => "Sorcerers and dangerous monsters"
        ]);

        DB::table('genres')->insert([
            'name' => "Romance",
            'description' => "Love stories"
        ]);
        DB::table('genres')->insert([
            'name' => "Crime",
            'description' => "Solving crimes using deduction! Elementary Watson!"
        ]);
        DB::table('genres')->insert([
            'name' => "Non-Fiction",
            'description' => "Real world topics to educate yourself with"
        ]);
        DB::table('genres')->insert([
            'name' => "Horror",
            'description' => "Spooky and jump scares!"
        ]);
        DB::table('genres')->insert([
            'name' => "Young Adult",
            'description' => "Teens!"
        ]);

    }
}
