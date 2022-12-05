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
            'genre'=>'寿司',
            'shop_id'=>'1'
        ]);

        Genre::create([
            'genre' => '焼肉',
            'shop_id'=>'2'
        ]);

        Genre::create([
            'genre' => '居酒屋',
            'shop_id'=>'3'
        ]);

        Genre::create([
            'genre' => 'イタリアン',
            'shop_id'=>'4'
        ]);

        Genre::create([
            'genre' => 'ラーメン',
            'shop_id'=>'5'
        ]);

        Genre::create([
            'genre' => '焼肉',
            'shop_id'=>'6'
        ]);

        Genre::create([
            'genre' => 'イタリアン',
            'shop_id'=>'7'
        ]);

        Genre::create([
            'genre' => 'ラーメン',
            'shop_id'=>'8'
        ]);

        Genre::create([
            'genre' => '居酒屋',
            'shop_id'=>'9'
        ]);

        Genre::create([
            'genre' => '寿司',
            'shop_id'=>'10'
        ]);

        Genre::create([
            'genre' => '焼肉',
            'shop_id'=>'11'
        ]);

        Genre::create([
            'genre' => '焼肉',
            'shop_id'=>'12'
        ]);

        Genre::create([
            'genre' => '居酒屋',
            'shop_id'=>'13'
        ]);

        Genre::create([
            'genre' => '寿司',
            'shop_id'=>'14'
        ]);

        Genre::create([
            'genre' => 'ラーメン',
            'shop_id'=>'15'
        ]);

        Genre::create([
            'genre' => '居酒屋',
            'shop_id'=>'16'
        ]);

        Genre::create([
            'genre' => '寿司',
            'shop_id'=>'17'
        ]);

        Genre::create([
            'genre' => '焼肉',
            'shop_id'=>'18'
        ]);

        Genre::create([
            'genre' => 'イタリアン',
            'shop_id'=>'19'
        ]);

        Genre::create([
            'genre' => '寿司',
            'shop_id'=>'20'
        ]);
    }
};
