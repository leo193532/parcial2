<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MarcasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('marcas')->insert([
            ['nombre' => 'Samsung', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Sony', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Apple', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'LG', 'created_at' => now(), 'updated_at' => now()], 
        ]);
    }
}
