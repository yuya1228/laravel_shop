<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'area'=>'東京都',
            'shop_id'=>'1'
        ]);

        Area::create([
            'area' => '大阪府',
            'shop_id'=>'2'
        ]);

        Area::create([
            'area' => '福岡県',
            'shop_id'=>'3'
        ]);

        Area::create([
            'area' => '東京都',
            'shop_id'=>'4'
        ]);

        Area::create([
            'area' => '福岡県',
            'shop_id'=>'5'
        ]);

        Area::create([
            'area' => '東京都',
            'shop_id'=>'6'
        ]);

        Area::create([
            'area' => '大阪府',
            'shop_id'=>'7'
        ]);

        Area::create([
            'area' => '東京都',
            'shop_id'=>'8'
        ]);

        Area::create([
            'area' => '大阪府',
            'shop_id'=>'9'
        ]);

        Area::create([
            'area' => '東京都',
            'shop_id'=>'10'
        ]);

        Area::create([
            'area' => '大阪府',
            'shop_id'=>'11'
        ]);

        Area::create([
            'area' => '福岡県',
            'shop_id'=>'12'
        ]);

        Area::create([
            'area' => '東京都',
            'shop_id'=>'13'
        ]);

        Area::create([
            'area' => '大阪府',
            'shop_id'=>'14'
        ]);

        Area::create([
            'area' => '東京都',
            'shop_id'=>'15'
        ]);

        Area::create([
            'area' => '大阪府',
            'shop_id'=>'16'
        ]);

        Area::create([
            'area' => '東京都',
            'shop_id'=>'17'
        ]);

        Area::create([
            'area' => '東京都',
            'shop_id'=>'18'
        ]);

        Area::create([
            'area' => '福岡県',
            'shop_id'=>'19'
        ]);

        Area::create([
            'area' => '大阪府',
            'shop_id'=>'20'
        ]);
    }
};
