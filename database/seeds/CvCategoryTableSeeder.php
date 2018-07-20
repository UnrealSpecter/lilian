<?php

use Illuminate\Database\Seeder;

class CvCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cv_categories')->insert(['name' => 'education']);
        DB::table('cv_categories')->insert(['name' => 'exhibitions']);
        DB::table('cv_categories')->insert(['name' => 'awards']);
        DB::table('cv_categories')->insert(['name' => 'publications']);
        DB::table('cv_categories')->insert(['name' => 'performance(textual)']);
        DB::table('cv_categories')->insert(['name' => 'experience(other)']);
    }
}
