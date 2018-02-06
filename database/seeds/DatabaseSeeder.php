<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Run the indicidual seeder classes.
      $this->call(ArticlesTableSeeder::class);
      $this->call(UsersTableSeeder::class);
    }
}
