<?php

use Illuminate\Database\Seeder;
use App\User;

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
        User::insert([
          'id' => 1,
          'name' => 'Ethan',
          'email' => 'email@email.com',
          'password' => 'password',
          'country_id' => 2
        ]);
    }
}
