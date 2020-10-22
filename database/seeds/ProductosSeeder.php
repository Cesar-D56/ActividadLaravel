<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Modelos\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'Flauta transversa',
            'tipo' => 'Musica',
            'comentario_id' => '1'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Pastel de Carne',
            'tipo' => 'Carnes',
            'comentario_id' => '2'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Botella de Vino',
            'tipo' => 'Licores',
            'comentario_id' => '3'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Piano de Cola',
            'tipo' => 'Musica',
            'comentario_id' => '4'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Galletas Maria',
            'tipo' => 'Galletas',
            'comentario_id' => '5'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Galletas Emperador',
            'tipo' => 'Galletas',
            'comentario_id' => '1'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Vodka',
            'tipo' => 'Licores',
            'comentario_id' => '2'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Salchicha Alemana',
            'tipo' => 'Carnes',
            'comentario_id' => '3'
        ]);
    }
}
