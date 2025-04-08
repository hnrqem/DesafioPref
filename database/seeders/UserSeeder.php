<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'     => 'Prefeitura Admin',
                'email'    => 'prefeituraadmin@prefsleo.com.br',
                'password' => Hash::make('admin123'),
            ],
            [
                'name'     => 'Servidor Exemplo',
                'email'    => 'servidorexemplo@prefsleo.com.br',
                'password' => Hash::make('senha456'),
            ],
        ]);
    }
}
