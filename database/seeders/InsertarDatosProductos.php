<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
            [
                'codigo' => 100,
                'nombre' => 'iPhone 11',
                'categoriaId' => 1,
                'sucursalId' => 1,
                'descripcion' => "Es un buen Smartphone",
                'cantidad' => 99,
                'precio' => 499000

            ]

        ));

    }
}
