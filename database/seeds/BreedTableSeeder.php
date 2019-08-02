<?php

use Illuminate\Database\Seeder;
use App\Breed;

class BreedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // cach 1
        factory(App\Breed::class, 5)->create();

//        //cach 2
//        Breed::create([
//            'name' => 'breed1',
//        ]);
//
//        // cach 3
//        Breed::insert([
//            [
//                'name' => 'breed1'
//            ],
//            [
//                'name' => 'breed2'
//            ]
//        ]);
    }
}
