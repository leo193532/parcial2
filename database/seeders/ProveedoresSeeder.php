<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('proveedores')->insert([
            [
                'nombre' => 'Distribuidora Tecnológica S.A.D.C.V',
                'telefono' => '9856-0723',
                'email' => 'ventas@ditecsa.com',
                'direccion' => 'Calle. Principal, San Salvador',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Importaciones Globales',
                'telefono' => '2270-5678',
                'email' => 'info@iglobales.com',
                'direccion' => 'Calle El Progreso, Santa Tecla',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Suministros del Hogar',
                'telefono' => '2525-2525',
                'email' => 'contacto@suministroshogar.com',
                'direccion' => 'Colonia Escalón, San Salvador',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}