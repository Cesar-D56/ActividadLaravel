<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Modelos\Comentario;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            'titulo' => 'Gran Producto',
            'comentario' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, adipisci velit...',
            'persona_id' => '1'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Excelente',
            'comentario' => 'Lorem ipsum dolor sit amet.',
            'persona_id' => '2'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Pesimo',
            'comentario' => 'Vesti la giubba e la faccia infarina. La gente paga e rider vuole qua.',
            'persona_id' => '3'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Algo extraño',
            'comentario' => 'E se Arelcchin tinvola Colombina Ridi, Pagliaccio e ognun applaudir',
            'persona_id' => '4'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Y este es un gran producto',
            'comentario' => '',
            'persona_id' => '5'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Un magnifico producto',
            'comentario' => 'Tramuta in lazzi lo spasmo ed il pianto In una smorfia il singhiozzo e l dolor...',
            'persona_id' => '3'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Demasiado pequeño',
            'comentario' => 'Ridi, Pagliaccio, sul tuo amore infranto, Ridi del duol che tavvelena il cor!',
            'persona_id' => '2'
        ]);
        DB::table('comentarios')->insert([
            'titulo' => 'Agradezco por este producto',
            'comentario' => 'Neque porro quisquam est qui dolorem ipsum quia, adipisci velit...',
            'persona_id' => '1'
        ]);
    }
}
