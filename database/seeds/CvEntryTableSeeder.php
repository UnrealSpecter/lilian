<?php

use Illuminate\Database\Seeder;

class CvEntryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cv_entries')->insert(
            [
                'category_id' => 1,
                'year_of_achievement' => null,
                'description' => '2009 - 2014: HAVO, Winkler Prins Secondary School Veendam (2009 - 2012 VWO)'
            ]
        );
        DB::table('cv_entries')->insert(
            [
                'category_id' => 1,
                'year_of_achievement' => null,
                'description' => '2014 - now: Fine Art, Academy Minerva, Groningen.'
            ]
        );
        DB::table('cv_entries')->insert(
            [
                'category_id' => 2,
                'year_of_achievement' => null,
                'description' => 'Coming up: small solo, ’Skek, Zeedijk Amsterdam'
            ]
        );
        DB::table('cv_entries')->insert(
            [
                'category_id' => 2,
                'year_of_achievement' => null,
                'description' => 'February 2018: ‘Its not me, it’s you’, ZUHAUSE, Groningen, NL'
            ]
        );
        DB::table('cv_entries')->insert(
            [
                'category_id' => 2,
                'year_of_achievement' => null,
                'description' => "May 2017: 'Leftovers', Maydays, OOST/the Gym Groningen, NL"
            ]
        );
        DB::table('cv_entries')->insert(
            [
                'category_id' => 2,
                'year_of_achievement' => null,
                'description' => "Februari 2017: 'January Expo', Academy Minerva Groningen, NL"
            ]
        );
        DB::table('cv_entries')->insert(
            [
                'category_id' => 2,
                'year_of_achievement' => null,
                'description' => "October 2016: 'WP 150', Van Berensteyn, Veendam, NL"
            ]
        );
        DB::table('cv_entries')->insert(
            [
                'category_id' => 2,
                'year_of_achievement' => null,
                'description' => 'September 2016: the studios, Groninger Museum, Groningen, NL'
            ]
        );
        DB::table('cv_entries')->insert(
            [
                'category_id' => 2,
                'year_of_achievement' => null,
                'description' => "April 2016: 'De Nieuwelingen', Galerie de Smederij, Sappemeer, NL"
            ]
        );
        DB::table('cv_entries')->insert(
            [
                'category_id' => 2,
                'year_of_achievement' => null,
                'description' => "Februari 2016: 'Art 15/20', stichting WEP, Groningen, NL"
            ]
        );
        DB::table('cv_entries')->insert(
            [
                'category_id' => 2,
                'year_of_achievement' => null,
                'description' => 'June 2015: Kunstbende Finals, Westergasfabriek Amsterdam, NL'
            ]
        );
        DB::table('cv_entries')->insert(
            [
                'category_id' => 2,
                'year_of_achievement' => null,
                'description' => 'August 2013: Kunstbende Finals, Melkweg Amsterdam, NL'
            ]
        );
        DB::table('cv_entries')->insert(
            [
                'category_id' => 2,
                'year_of_achievement' => null,
                'description' => 'September 2013: Simplon, Groningen, NL'
            ]
        );
    }
}
