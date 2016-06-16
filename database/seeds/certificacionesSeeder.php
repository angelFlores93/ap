<?php

use Illuminate\Database\Seeder;
use App\certificaciones;

class certificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        certificaciones::create(['folio'=>'RC_1_2585321_1', 'folioOrden'=>'1', 'idActa'=>'2585321', 'acto'=>'1']);
        certificaciones::create(['folio'=>'RC_2_654321_2', 'folioOrden'=>'3', 'idActa'=>'654321', 'acto'=>'2']);
    }
}
