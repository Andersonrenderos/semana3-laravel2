<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Defenimos el arreglo de dotos a insertar
        $data = array([
            'nombre'=>'Zapatos',
            'precio'=>59.99,
            'marca'=>1,
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Camisa',
            'precio'=>35.19,
            'marca'=>2,
            'created_at'=>Carbon::now()
        ]);

        //Insertamos la data en la tabla marcas
        DB::table('productos')->insert($data);
    }
}
