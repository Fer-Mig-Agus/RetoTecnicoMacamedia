<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Usuario1',
                'email' => 'usuario1@gmail.com',
                'password' => Hash::make('password1'),
            ],
            [
                'name' => 'Usuario2',
                'email' => 'usuario2@gmail.com',
                'password' => Hash::make('password2'),
            ],
            
        ];

        // Insertar usuarios en la tabla 'users'
        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
