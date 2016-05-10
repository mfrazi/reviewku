<?php

use Illuminate\Database\Seeder;

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
            ['name' => 'Action'],
            ['name' => 'Adventure'],
            ['name' => 'Animation'],
            ['name' => 'Biography'],
            ['name' => 'Comedy'],
            ['name' => 'Crime'],
            ['name' => 'Documentary'],
            ['name' => 'Drama'],
            ['name' => 'Family'],
            ['name' => 'Fantasy'],
            ['name' => 'History'],
            ['name' => 'Horror'],
            ['name' => 'Musical'],
            ['name' => 'Mystery'],
            ['name' => 'Romance'],
            ['name' => 'Sci-Fi'],
            ['name' => 'Sport'],
            ['name' => 'Thriller'],
            ['name' => 'War'],
            ['name' => 'Western']
        ]);
    }
}
