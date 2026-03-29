<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categorias')->insert([
            ['nombre' => 'Electrónica', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Hogar', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Computación', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}