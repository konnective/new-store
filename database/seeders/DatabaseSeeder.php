<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
// use App\Models\cart;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Book::create([
            'id' => '1236767',
            'title' => 'apple headphones',
            'price' => 149,
            'quantity' => '1',


        ]);

        // Item::create([

        //     'id' => '1236767',
        //     'title' => 'apple headphones',
        //     'price' => 149,
        //     'description' => 'this si lorem ipsum text something to relate to',
        //     'stock' => '1',
        //     'img' => 'someurl',

        // ],);
    }
}