<?php

use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 15 matches using the factory when DB is seeded
        factory(App\Match::class, 15)->create();
    }
}
