<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RolesSeeder::class,
            UserSeeder::class,
            CitySeeder::class,
            CategorySeeder::class,
            StatusSeeder::class,
            RoomSeeder::class,
            ImageSeeder::class,
            RatingSeeder::class,
            BookingSeeder::class,
            HomeSeeder::class
        ]);
    }
}
