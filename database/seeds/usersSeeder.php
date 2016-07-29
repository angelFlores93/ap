<?php

use Illuminate\Database\Seeder;
use App\user;
class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create(['name'=>'null', 'lastname'=>"null"]);
        user::create(['name'=>'Amalia', 'lastname'=>"Saldivar Ramírez"]);
        user::create(['name'=>'Martha', 'lastname'=>"Olascoaga Soria"]);
        user::create(['name'=>'Alma Norma', 'lastname'=>"Mendoza Guerrero"]);
    }
}
