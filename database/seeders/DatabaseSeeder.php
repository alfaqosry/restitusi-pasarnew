<?php

namespace Database\Seeders;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User::factory(2)->create()->each(function ($user) {
        //     $user->pedagang()->create([
        //         'name' => fake()->name(),
        //         'nik' => fake()->unique()->numerify('##########'),
        //         'no_hp' => fake()->phoneNumber(),
        //         'alamat' => fake()->address(),
        //         'jenis_dagangan' => 'Dagangan contoh',
        //         'tgl_lahir' => fake()->date(),
        //     ]);

        //     $user->verifikasiakun()->create([
        //         'status' => "Belum Diajukan",
        //         "keterangan" => "Silahkan ajukan"
        //     ]);
        // });
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'pedagang']);

        
        $admin = User::create([
        
      
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password'),

        ])->assignRole('admin');

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
        
         
            'email' => 'pedagang@gmail.com',
            'role' => 'pedagang',
            'password' => bcrypt('password'),
            

        ])->assignRole('pedagang');
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
