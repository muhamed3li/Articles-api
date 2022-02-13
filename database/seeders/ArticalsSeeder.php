<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\Artical::factory(25)->create(); 
    }
}
