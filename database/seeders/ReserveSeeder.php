<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reserve;
use DateTime;

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
            'sum_people' => 1,
            'time_start' => new DateTime(),
        ]);

        Reserve::create([
            'sum_people' => 2,
            'time_start' => new DateTime(),
        ]);

        Reserve::create([
            'sum_people' => 3,
            'time_start' => new DateTime(),
        ]);

        Reserve::create([
            'sum_people' => 4,
            'time_start' => new DateTime(),
        ]);

        Reserve::create([
            'sum_people' => 5,
            'time_start' => new DateTime(),
        ]);
    }
}
