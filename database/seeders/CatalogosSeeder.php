<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('categorias')->insert([
            'nombre'        => "Sin Categoria"
        ]);

        /*DB::table('productos')->insert([
            'nombre'        => "Sin Categoria"
        ]);*/
    }
}
