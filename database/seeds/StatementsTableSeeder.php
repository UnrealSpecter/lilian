<?php

use Illuminate\Database\Seeder;

class StatementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statements')->insert(['image_path' => '/img/statement/artist-statement.jpg']);
    }
}
