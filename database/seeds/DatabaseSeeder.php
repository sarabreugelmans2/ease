<?php

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
        $this->call(ActivitiesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(HabitSeeder::class);
        $this->call(RelaxesSeeder::class);

    }
}
