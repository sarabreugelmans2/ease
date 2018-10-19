<?php

use Illuminate\Database\Seeder;

class RelaxesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Relax::class, 10)->create();
    }
}
