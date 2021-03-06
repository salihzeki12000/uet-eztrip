<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(TourGuideSeeder::class);
        $this->call(TouristGuideSeeder::class);
        $this->call(TourSeeder::class);
    }
}
