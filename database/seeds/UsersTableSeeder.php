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
        //$timestamps = false;
        $user = new User;
        $user -> id = 1;
        $user -> name = "Greg";
        $user -> email = "fakeemail@fakeemail.com";
        $user -> password = "password";

        //factory(App\User::class, 10)->create();

        $user->save();

    }
}
