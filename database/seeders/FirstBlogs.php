<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class FirstBlogs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            ['name' => 'The Last Of Us', 'slug' => 'The+Last+Of+Us', 'platform' => 'PS4', 'release' => '07/22/2014', 'publisher' => 'Sony', 'genre' => 'Action, Adventure'],
            ['name' => 'God Of War', 'slug' => 'God+Of+War', 'platform' => 'PS4', 'release' => '04/20/2018', 'publisher' => 'Sony', 'genre' => 'Action'],
            ['name' => 'Fortnite', 'slug' => 'Fortnite', 'platform' => 'PS4', 'release' => '07/21/2017', 'publisher' => 'Epic Games', 'genre' => 'Action, Adventure'],
            ['name' => 'Ghost Of Tsushima', 'slug' => 'Ghost+Of+Tsushima', 'platform' => 'PS4', 'release' => '08/20/2021', 'publisher' => 'Sony', 'genre' => 'Unique'],
            ['name' => 'FINAL FANTASY VII', 'slug' => 'FINAL+FANTASY+VII', 'platform' => 'PS4', 'release' => '12/05/2015', 'publisher' => 'SQUARE', 'genre' => 'Role Playing Games'],
            ['name' => 'Mortal Kombat X', 'slug' => 'Mortal+Kombat+X', 'platform' => 'PS4', 'release' => '04/14/2015', 'publisher' => 'Warner Bros. Interactive', 'genre' => 'Fighting'],
            ['name' => 'Bloodborne', 'slug' => 'Bloodborne', 'platform' => 'PS4', 'release' => '03/24/2015', 'publisher' => 'Sony', 'genre' => 'Action'],
            ['name' => 'Battlefield 1', 'slug' => 'Battlefield+1', 'platform' => 'PS4', 'release' => '10/21/2016', 'publisher' => 'Electronic Arts Inc', 'genre' => 'Shooter'],
            ['name' => 'Horizon Zero Dawn', 'slug' => 'Horizon+Zero+Dawn', 'platform' => 'PS4', 'release' => '12/05/2017', 'publisher' => 'Sony', 'genre' => 'Action'],
            ['name' => 'Watch Dogs 2', 'slug' => 'Watch+Dogs+2', 'platform' => 'PS4', 'release' => '11/15/2016', 'publisher' => 'Ubisoft', 'genre' => 'Adventure, Action'],
            ['name' => 'RESIDENT EVIL 2', 'slug' => 'RESIDENT+EVIL+2', 'platform' => 'PS4', 'release' => '01/25/2019', 'publisher' => 'Capcom', 'genre' => 'Action, Horror'],
            ['name' => 'Assassin’s Creed Origins', 'slug' => 'Assassins+Creed+Origins', 'platform' => 'PS4', 'release' => '10/27/2017', 'publisher' => 'Ubisoft', 'genre' => 'Adventure, Action'],
            ['name' => 'Battlefield 4', 'slug' => 'Battlefield+4', 'platform' => 'PS4', 'release' => '11/15/2013', 'publisher' => 'Electronic', 'genre' => 'Action, Shooter'],
            ['name' => 'World War Z', 'slug' => 'World+War+Z', 'platform' => 'PS4', 'release' => '04/16/2019', 'publisher' => 'Mad Dog', 'genre' => 'Action, Shooter'],
            ['name' => 'The Last Of Us Part II', 'slug' => 'The+Last+Of+Us+Part+II', 'platform' => 'PS4', 'release' => '06/19/2020', 'publisher' => 'Sony', 'genre' => 'Action, Adventure'],
            ['name' => 'FAR CRY 5', 'slug' => 'FAR+CRY+5', 'platform' => 'PS4', 'release' => '03/27/2018', 'publisher' => 'Ubisoft', 'genre' => 'Action, Shooter']
        ]);
    }
}
