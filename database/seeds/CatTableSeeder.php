<?php

use Illuminate\Database\Seeder;
use App\Cat;

class CatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Cat::class, 10)->create();
    }
}
