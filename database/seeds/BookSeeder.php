<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'ISBN' => '9788324144686',
            'title' => 'Game of Thrones',
            'first_name' => 'George',
            'last_name' => 'Martin',
            'genre_id' => 2,
            'publisher_id' => 1
        ]);

        DB::table('books')->insert([
            'ISBN' => '9780006473299',
            'title' => 'The Chronicles of Thomas Covenant, the Unbeliever',
            'first_name' => 'Steven',
            'last_name' => 'Donaldson',
            'genre_id' => 2,
            'publisher_id' => 2
        ]);

        DB::table('books')->insert([
            'ISBN' => '0-86140-324-X',
            'title' => 'The Color of Magic',
            'first_name' => 'Terry',
            'last_name' => 'Pratchet',
            'genre_id' => 1,
            'publisher_id' => 2
        ]);

        DB::table('books')->insert([
            'ISBN' => '9781101154922',
            'title' => 'IT',
            'first_name' => 'Stephen',
            'last_name' => 'King',
            'genre_id' => 6,
            'publisher_id' => 1
        ]);

     
        DB::table('books')->insert([
            'ISBN' => '0134494164',
            'title' => 'Clean architecture from Uncle Bob',
            'first_name' => 'Robert',
            'last_name' => 'Martin',
            'genre_id' => 5,
            'publisher_id' => 1
        ]);
        DB::table('books')->insert([
            'ISBN' => '0385302304',
            'title' => 'Outlander',
            'first_name' => 'Diana',
            'last_name' => 'Gabaldon',
            'genre_id' => 3,
            'publisher_id' => 2
        ]);
    }
}
