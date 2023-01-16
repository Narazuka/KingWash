<?php

namespace Database\Seeders;
use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Booking::create([
            'nama'=>'Dimas',
            'notelp'=>'08123456789',
            'layanan'=>'Cuci Luar',
            'Merk'=>'Toyota Avanza',
            'plat'=>'AB123XX',
            'tanggal'=>'22/02/06',
        ]);
    }
}
