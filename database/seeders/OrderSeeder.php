<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory(100)
            ->hasAuthors(2)
            ->create()
            ->each(function ($book) {
                Order::factory(10)->for($book)->create();
            });
    }
}
