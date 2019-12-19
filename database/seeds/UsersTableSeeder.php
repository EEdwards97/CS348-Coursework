<?php

use App\User;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $u = new User;
        $u -> name = "Greg";
        $u -> email = "email@email.com";
        $u -> password = "password";

        factory(App\User::class, 50)->create();

    }
}
