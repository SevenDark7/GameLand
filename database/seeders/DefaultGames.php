<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Seeder;

class DefaultGames extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();
        $games = [
            ['name' => 'The Last Of Us', 'platform' => 'PS4', 'release' => '07/22/2014', 'publisher' => 'Sony', 'genre' => 'Action, Adventure', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '750000'],
            ['name' => 'گاد آف وار', 'platform' => 'PS4', 'release' => '04/20/2018', 'publisher' => 'Sony', 'genre' => 'Action', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '500000'],
            ['name' => 'Fortnite', 'platform' => 'PS4', 'release' => '07/21/2017', 'publisher' => 'Epic Games', 'genre' => 'Action, Adventure', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '450000'],
            ['name' => 'Ghost Of Tsushima', 'platform' => 'PS4', 'release' => '08/20/2021', 'publisher' => 'Sony', 'genre' => 'Unique', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '600000'],
            ['name' => 'FINAL FANTASY VII', 'platform' => 'PS4', 'release' => '12/05/2015', 'publisher' => 'SQUARE', 'genre' => 'Role Playing Games', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '550000'],
            ['name' => 'Mortal Kombat X', 'platform' => 'PS4', 'release' => '04/14/2015', 'publisher' => 'Warner Bros. Interactive', 'genre' => 'Fighting', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '480000'],
            ['name' => 'Bloodborne', 'platform' => 'PS4', 'release' => '03/24/2015', 'publisher' => 'Sony', 'genre' => 'Action', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '590000'],
            ['name' => 'Battlefield 1', 'platform' => 'PS4', 'release' => '10/21/2016', 'publisher' => 'Electronic Arts Inc', 'genre' => 'Shooter', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '400000'],
            ['name' => 'Horizon Zero Dawn', 'platform' => 'PS4', 'release' => '12/05/2017', 'publisher' => 'Sony', 'genre' => 'Action', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '600000'],
            ['name' => 'Watch Dogs 2', 'platform' => 'PS4', 'release' => '11/15/2016', 'publisher' => 'Ubisoft', 'genre' => 'Adventure, Action', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '750000'],
            ['name' => 'RESIDENT EVIL 7', 'platform' => 'PS4', 'release' => '01/25/2019', 'publisher' => 'Capcom', 'genre' => 'Action, Horror', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '500000'],
            ['name' => 'Assassin’s Creed Origins', 'platform' => 'PS4', 'release' => '10/27/2017', 'publisher' => 'Ubisoft', 'genre' => 'Adventure, Action', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '670000'],
            ['name' => 'Battlefield 4', 'platform' => 'PS4', 'release' => '11/15/2013', 'publisher' => 'Electronic', 'genre' => 'Action, Shooter', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '580000'],
            ['name' => 'World War Z', 'platform' => 'PS4', 'release' => '04/16/2019', 'publisher' => 'Mad Dog', 'genre' => 'Action, Shooter', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '499000'],
            ['name' => 'The Last Of Us Part II', 'platform' => 'PS4', 'release' => '06/19/2020', 'publisher' => 'Sony', 'genre' => 'Action, Adventure', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '585000'],
            ['name' => 'فار کرای 5', 'platform' => 'PS4', 'release' => '03/27/2018', 'publisher' => 'Ubisoft', 'genre' => 'Action, Shooter', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '499000']
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}
