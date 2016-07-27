<?php

use Illuminate\Database\Seeder;
use App\ordenPago;
class ordenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ordenPago::create(['folio'=>'OP1', 'tipo'=>'Certificación', 'status'=>'No pagado', 'numTramites'=>'2', 'resueltoPor'=>'1']);
        ordenPago::create(['folio'=>'OP2', 'tipo'=>'Constancia', 'status'=>'Pagado', 'numTramites'=>'1','resueltoPor'=>'2']);
        ordenPago::create(['folio'=>'OP3', 'tipo'=>'Constancia', 'status'=>'No pagado', 'numTramites'=>'1','resueltoPor'=>'1']);

    }
}
