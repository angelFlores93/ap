<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(actosSeeder::class);
        //$this->call(certificacionesSeeder::class);
        //$this->call(constanciasSeeder::class);
        //$this->call(ordenesSeeder::class);
        $this->call(usersSeeder::class);

        Model::reguard();
    }
}
