<?php

use Illuminate\Database\Seeder;

class TiendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiendas')->insert([
            'nombre'=> 'Forum Sport'
        ]);
        DB::table('tiendas')->insert([
            'nombre'=> 'Game'
        ]);
        DB::table('tiendas')->insert([
            'nombre'=> 'The Good Burger'
        ]);
    }
}
