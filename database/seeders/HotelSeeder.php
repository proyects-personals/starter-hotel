<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotels')->insert([
            [
                'name' => 'Hotel 1',
                'description' => 'Hotel descripcion 1',
                'address' => 'Av. Siempre Viva 123',
                'phone_number' => '123-456-7890',
                'email' => 'contacto@primariacentral.com',
                'image' => 'school1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hotel 2',
                'description' => 'Hotel descripcion 2',
                'address' => 'Calle Falsa 456',
                'phone_number' => '987-654-3210',
                'email' => 'info@institutolosandes.com',
                'image' => 'school2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
