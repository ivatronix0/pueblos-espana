<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $datos = json_decode(file_get_contents(public_path('datos.json')), true);
    foreach ($datos as $dato) {
        DB::table('pueblos')->insert([
            'Cod_mun' => $dato['Cod mun'],
            'Mun' => $dato['Mun'],
            'Codi_c' => $dato['Codi c'],
            'Comarca' => $dato['Comarca'],
            'Provincia' => $dato['Provinicia'],
            'Descripcion' => $dato['Descripcio'],
            'Foto' => $dato['Foto'],
        ]);
    }
}

}
