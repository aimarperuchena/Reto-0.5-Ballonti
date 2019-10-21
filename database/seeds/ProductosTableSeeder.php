<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'id_tienda'=> '1',
            'nombre' => 'Bicicleta Orbea',
            'descripcion'=> 'Bicicleta de alto rendimiento con frenos de carbono',
            'precio'=>'4000',
            'stock'=>'10',
            'link_imagen'=>'imagenes/forum/orbea_sport_bici.jpg',
            'link'=>'https://www.google.com'
        ]);
    }
}
