<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Iván Moya',
            'email' => 'ivn.moya@proton.me',
            'password' => Hash::make('12345678'),
        ])->assignRole('Super Admin');

        User::factory()->create([
            'name' => 'Prueba',
            'email' => 'ab@upm.es',
            'password' => Hash::make('12345678'),
        ])->assignRole('Estudiante');


    }
}
