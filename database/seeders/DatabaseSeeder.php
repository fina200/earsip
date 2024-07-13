<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Departemen;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Departemen::create([
            'nama' => 'TU',
        ]);
        Departemen::create([
            'nama' => 'Kepala Sekolah',
        ]);
        Departemen::create([
            'nama' => 'Staf Guru',
        ]);

        User::create([
            'nama' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('ADMIN321'),
            'role' => 'admin',
            'departemen_id' => 1
        ]);
        User::create([
            'nama' => 'Kepala Sekolah',
            'username' => 'kepsek',
            'password' => bcrypt('KEPSEK321'),
            'role' => 'pegawai',
            'departemen_id' => 2
        ]);
    }
}
