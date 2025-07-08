<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            [
                'hotels_id' => 1,
                'name' => 'habitacion 1',
                'capacity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotels_id' => 1,
                'name' => 'habitacion 2',
                'capacity' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotels_id' => 2,
                'name' => 'habitacion 1',
                'capacity' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
