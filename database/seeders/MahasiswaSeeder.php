<?php

namespace Database\Seeders;
use App\Models\mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       mahasiswa::create([
            'name' =>fake()->name(),
            'nim' => "2602181534",
            'semester' => 6,
            'region' => 'Semarang'

        ]);

        mahasiswa::create([
            'name' =>fake()->name(),
            'nim' => "2602181534",
            'semester' => 6,
            'region' => 'Malang'

        ]);

        mahasiswa::create([
            'name' =>fake()->name(),
            'nim' => "2602181534",
            'semester' => 6,
            'region' => 'Bekasi'

        ]);

        mahasiswa::create([
            'name' =>fake()->name(),
            'nim' => "2602181534",
            'semester' => 6,
            'region' => 'Alsut'

        ]);
    }
}
