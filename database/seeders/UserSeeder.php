<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $admin = User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password'),

        ]);

        $admin->pedagang()->create([
            'name' => fake()->name(),
            'nik' => fake()->unique()->numerify('##########'),
            'no_hp' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
            'jenis_dagangan' => 'Dagangan contoh',
            'tgl_lahir' => fake()->date(),
        ]);

        $admin->verifikasiakun()->create([
            'status' => "verified",
            "keterangan" => "Silahkan ajukan"
        ]);

        $pedagang = User::create([
            'name' => 'pedagang',
            'username' => 'pedagang',
            'email' => 'pedagang@gmail.com',
            'role' => 'pedagang',
            'password' => bcrypt('password'),

        ]);
        $pedagang->pedagang()->create([
            'name' => fake()->name(),
            'nik' => fake()->unique()->numerify('##########'),
            'no_hp' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
            'jenis_dagangan' => 'Dagangan contoh',
            'tgl_lahir' => fake()->date(),
        ]);

        $pedagang->verifikasiakun()->create([
            'status' => "Belum Diajukan",
            "keterangan" => "Silahkan ajukan"
        ]);
    }
}
