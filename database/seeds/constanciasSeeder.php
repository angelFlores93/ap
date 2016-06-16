<?php

use Illuminate\Database\Seeder;
use App\constancias;
class constanciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        constancias::create(['folio'=>'RC_1_123456_5', 'folioOrden'=>'2', 'acto'=>'5']);
        constancias::create(['folio'=>'RC_3_123987_2', 'folioOrden'=>'3', 'acto'=>'2']);
    }
}
