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
         $this->call(BankomatsTableSeeder::class);
         $this->call(FilialsTableSeeder::class);
         $this->call(ProstoisTableSeeder::class);
    }
}
