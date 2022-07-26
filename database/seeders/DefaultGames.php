<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultGames extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'username' => 'SevenDark',
            'password' => Hash::make('SevenDark'),
            'mobile' => '09335136797'
        ]);
        $games = [
            ['name' => 'The Last Of Us', 'platform' => 'PS4', 'genre' => 'Action, Adventure', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '750000'],
            ['name' => 'گاد آف وار', 'platform' => 'PS4', 'genre' => 'Action', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '500000'],
            ['name' => 'Fortnite', 'platform' => 'PS4', 'genre' => 'Action, Adventure', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '450000'],
            ['name' => 'Ghost Of Tsushima', 'platform' => 'PS4', 'genre' => 'Unique', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '600000'],
            ['name' => 'FINAL FANTASY VII', 'platform' => 'PS4', 'genre' => 'Role Playing Games', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '550000'],
            ['name' => 'Mortal Kombat X', 'platform' => 'PS4', 'genre' => 'Fighting', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '480000'],
            ['name' => 'Bloodborne', 'platform' => 'PS4', 'genre' => 'Action', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '590000'],
            ['name' => 'Battlefield 1', 'platform' => 'PS4', 'genre' => 'Shooter', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '400000'],
            ['name' => 'Horizon Zero Dawn', 'platform' => 'PS4', 'genre' => 'Action', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '600000'],
            ['name' => 'Watch Dogs 2', 'platform' => 'PS4', 'genre' => 'Adventure, Action', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '750000'],
            ['name' => 'RESIDENT EVIL 7', 'platform' => 'PS4', 'genre' => 'Action, Horror', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '500000'],
            ['name' => 'Assassin’s Creed Origins', 'platform' => 'PS4', 'genre' => 'Adventure, Action', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '670000'],
            ['name' => 'Battlefield 4', 'platform' => 'PS4', 'genre' => 'Action, Shooter', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '580000'],
            ['name' => 'World War Z', 'platform' => 'PS4', 'genre' => 'Action, Shooter', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '499000'],
            ['name' => 'The Last Of Us Part II', 'platform' => 'PS4', 'genre' => 'Action, Adventure', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '585000'],
            ['name' => 'فار کرای 5', 'platform' => 'PS4', 'genre' => 'Action, Shooter', 'user_id' => $user->id, 'description' => 'تست نمایش توضیحات بازی', 'status' => 1, 'price' => '499000']
        ];

        foreach ($games as $game) {
            Game::create([
                'name' => $game['name'],
                'platform' => $game['platform'],
                'genre' => $game['genre'],
                'user_id' => $game['user_id'],
                'description' => $game['description'],
                'status' => $game['status'],
                'price' => $game['price'],
                'city_id' => City::query()->inRandomOrder()->first()->id,
            ]);
        }
    }
}
