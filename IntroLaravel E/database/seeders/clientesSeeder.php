<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Juan',
                'apellido'=>'Perez',
                'correo'=>'Juan@gmail.com',
                'telefono'=>'1234567890',
            ],
            [
                'nombre'=>'Alejandra',
                'apellido'=>'Jimenez',
                'correo'=>'Jimenez@gmail.com',
                'telefono'=>'1232323456',
            ],
            [
                'nombre'=>'Dana',
                'apellido'=>'Villarreal',
                'correo'=>'Villarreal@gmail.com',
                'telefono'=>'12876567890',
            ]]);
    }
}
