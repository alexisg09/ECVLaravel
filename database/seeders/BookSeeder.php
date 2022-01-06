<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            Book::create(
                ['title' => 'Le retour du chien qui pue : Tome ' . $i,
                    'author' => 'Patrick McDog ChienChien',
                    'page_number' => (10 + $i) * $i,
                ]
            );
        }
    }
}
