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
        // Truncate the table for a clea slate.
        User::truncate();

        $faker = \Faker\Factory::create();

        // Make same password for all fake users.
        // Hash prior to loop for speed.
        $password = Hash::make('elazor');

        // Generate the fake users.
        for ($i = 0; $i < 10; $i++){
          User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => $password,
          ]);
        }
    }
}
