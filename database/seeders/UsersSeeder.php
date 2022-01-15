<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Kepsek',
            'nip' => '11900472',
            'alamat' => 'Bogor',
            'role' => 'kepsek',
            'supervisor' => 0,
            'email' => 'kepsek@gmail.com',
            'password' => Hash::make('11900472'),
        ]);
        User::create([
            'name' => 'Kurikulum',
            'nip' => '11900433',
            'alamat' => 'Bogor',
            'role' => 'kurikulum',
            'supervisor' => 1,
            'email' => 'kurikulum@gmail.com',
            'password' => Hash::make('11900433'),
        ]);

    }
}
