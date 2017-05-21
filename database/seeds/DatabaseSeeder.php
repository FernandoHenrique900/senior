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
        $this->call(SeedBanner::class);
        $this->call(SeedContato::class);
        $this->call(SeedEquipes::class);
        $this->call(SeedSolucoes::class);
        $this->call(SeedTextos::class);
    }
}
