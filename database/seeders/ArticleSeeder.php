<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($i = 1; $i <= 9; $i++) {
        Article::create(
            ['title' => 'Mon superbe Article',
                'description' => 'Blabloubliblablablabloubliblablablabloubliblablablabloubliblablablabloubliblablablabloubliblablablabloubliblablablabloubliblablabla']
        );
    }
//    }
}
