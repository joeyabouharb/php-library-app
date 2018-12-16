<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'publisher_name' => 'Harper',
            'street_address' => 'Example Street',
            'post_code' => '1111',
            'state' => 'ETC'
        ]);
        DB::table('publishers')->insert([
            'publisher_name' => 'Scholastic',
            'street_address' => 'Test Street',
            'post_code' => '1122',
            'state' => 'TBD'
        ]);

        DB::table('publishers')->insert([
            'publisher_name' => 'Bad Publisher',
            'street_address' => 'worst streey',
            'post_code' => '1421',
            'state' => 'ZZZ'
        ]);
        DB::table('publishers')->insert([
            'publisher_name' => 'tor',
            'street_address' => 'fake street',
            'post_code' => '3210',
            'state' => 'test'
        ]);
    }
}
