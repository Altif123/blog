<?php

//namespace Database\Seeders;


//use HotelSeeder;
use Database\Seeders\HotelSeeder;
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
        $this->call(HotelSeeder::class);
    }
}
