<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;



class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@dawan.fr',
            'password' => Hash::make('admin2026'),
            'roles' => json_encode(['ROLE_ADMIN', 'ROLE_USER'])
        ]);
    }
}
