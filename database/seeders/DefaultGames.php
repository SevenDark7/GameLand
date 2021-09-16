<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class defaultGames extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('games')->insert([
            ['Name' => 'The Last Of Us', 'Platform' => 'PS4', 'Release' => '7/22/2014', 'Publisher' => 'Sony', 'Genre' => 'Action, Adventure', 'Favorite' => 1],
            ['Name' => 'God Of War', 'Platform' => 'PS4', 'Release' => '4/20/2018', 'Publisher' => 'Sony', 'Genre' => 'Action', 'Favorite' => 1],
            ['Name' => 'Fortnite', 'Platform' => 'PS4', 'Release' => '7/21/2017', 'Publisher' => 'Epic Games', 'Genre' => 'Action, Adventure', 'Favorite' => 0],
            ['Name' => 'Ghost of Tsushima', 'Platform' => 'PS4', 'Release' => '8/20/2021', 'Publisher' => 'Sony', 'Genre' => 'Unique', 'Favorite' => 0],
            ['Name' => 'FINAL FANTASY VII', 'Platform' => 'PS4', 'Release' => '12/5/2015', 'Publisher' => 'SQUARE', 'Genre' => 'Role Playing Games', 'Favorite' => 1],
            ['Name' => 'Mortal Kombat X', 'Platform' => 'PS4', 'Release' => '4/14/2015', 'Publisher' => 'Warner Bros. Interactive', 'Genre' => 'Fighting', 'Favorite' => 0],
            ['Name' => 'Bloodborne', 'Platform' => 'PS4', 'Release' => '3/24/2015', 'Publisher' => 'Sony', 'Genre' => 'Action', 'Favorite' => 0],
            ['Name' => 'Battlefield 1', 'Platform' => 'PS4', 'Release' => '10/21/2016', 'Publisher' => 'Electronic Arts Inc', 'Genre' => 'Shooter', 'Favorite' => 0],
            ['Name' => 'Horizon Zero Dawn', 'Platform' => 'PS4', 'Release' => '12/5/2017', 'Publisher' => 'Sony', 'Genre' => 'Action', 'Favorite' => 1],
            ['Name' => 'Watch Dogs 2', 'Platform' => 'PS4', 'Release' => '11/15/2016', 'Publisher' => 'Ubisoft', 'Genre' => 'Adventure, Action', 'Favorite' => 1],
            ['Name' => 'RESIDENT EVIL 2', 'Platform' => 'PS4', 'Release' => '1/25/2019', 'Publisher' => 'Capcom', 'Genre' => 'Action, Horror', 'Favorite' => 0],
            ['Name' => 'Assassin’s Creed Origins', 'Platform' => 'PS4', 'Release' => '10/27/2017', 'Publisher' => 'Ubisoft', 'Genre' => 'Adventure, Action', 'Favorite' => 1],
            ['Name' => 'Battlefield 4', 'Platform' => 'PS4', 'Release' => '11/15/2013', 'Publisher' => 'Electronic', 'Genre' => 'Action, Shooter', 'Favorite' => 1],
            ['Name' => 'World War Z', 'Platform' => 'PS4', 'Release' => '4/16/2019', 'Publisher' => 'Mad Dog', 'Genre' => 'Action, Shooter', 'Favorite' => 1],
            ['Name' => 'The Last of Us Part II', 'Platform' => 'PS4', 'Release' => '6/19/2020', 'Publisher' => 'Sony', 'Genre' => 'Action, Adventure', 'Favorite' => 1],
            ['Name' => 'FAR CRY 5', 'Platform' => 'PS4', 'Release' => '3/27/2018', 'Publisher' => 'Ubisoft', 'Genre' => 'Action, Shooter', 'Favorite' => 1]
        ]);
    }
}
