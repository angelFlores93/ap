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
        user::create(['name'=>'Angel Alberto', 'lastname'=>"Flores Rodríguez"]);
    }
}
