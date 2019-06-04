<?php

use Illuminate\Database\Seeder;

class Blok1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Blok1::class, 5)->create();
    }
}
