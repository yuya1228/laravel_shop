<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reserve;

class ReserveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reserve::create([
            'user_id'=>1,
            'shop_id'=>1,
        ]);

        Reserve::create([
            'user_id' => 2,
            'shop_id' => 2,
        ]);

        Reserve::create([
            'user_id' => 3,
            'shop_id' => 3,
        ]);

        Reserve::create([
            'user_id' => 4,
            'shop_id' => 4,
        ]);

        Reserve::create([
            'user_id' => 6,
            'shop_id' => 6,
        ]);

        Reserve::create([
            'user_id' => 7,
            'shop_id' => 7,
        ]);

        Reserve::create([
            'user_id' => 8,
            'shop_id' => 8,
        ]);

        Reserve::create([
            'user_id' => 9,
            'shop_id' => 9,
        ]);

        Reserve::create([
            'user_id' => 10,
            'shop_id' => 10,
        ]);

        Reserve::create([
            'user_id' => 11,
            'shop_id' => 11,
        ]);

        Reserve::create([
            'user_id' => 12,
            'shop_id' => 12,
        ]);

        Reserve::create([
            'user_id' => 13,
            'shop_id' => 13,
        ]);

        Reserve::create([
            'user_id' => 14,
            'shop_id' => 14,
        ]);

        Reserve::create([
            'user_id' => 15,
            'shop_id' => 15,
        ]);

        Reserve::create([
            'user_id' => 16,
            'shop_id' => 16,
        ]);

        Reserve::create([
            'user_id' => 17,
            'shop_id' => 17,
        ]);

        Reserve::create([
            'user_id' => 18,
            'shop_id' => 18,
        ]);

        Reserve::create([
            'user_id' => 19,
            'shop_id' => 19,
        ]);

        Reserve::create([
            'user_id' => 20,
            'shop_id' => 20,
        ]);
    }
}
