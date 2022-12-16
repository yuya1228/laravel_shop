<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'id'=>'1',
            'genre'=>'寿司',
        ]);

        Genre::create([
            'id' => '2',
            'genre' => '焼肉',
        ]);

        Genre::create([
            'id' => '3',
            'genre' => '居酒屋',
        ]);

        Genre::create([
            'id' => '4',
            'genre' => 'イタリアン',
        ]);

        Genre::create([
            'id' => '5',
            'genre' => 'ラーメン',
        ]);
    }
};
