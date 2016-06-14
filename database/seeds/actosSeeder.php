<?php

use Illuminate\Database\Seeder;
use App\actos;
class actosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        actos::create(['description'=>'Nacimiento']);
        actos::create(['description'=>'Matrimonio']);
        actos::create(['description'=>'Defunción']);
        actos::create(['description'=>'Adopción']);
        actos::create(['description'=>'Divorcio']);
        actos::create(['description'=>'Sentencia']);
        actos::create(['description'=>'Reconocimiento']);
        actos::create(['description'=>'Inscripción de Nacimiento']);
        actos::create(['description'=>'Inscripción de Matrimonio']);
        actos::create(['description'=>'Inscripción de Defunción']);
    }
}
