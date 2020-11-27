<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        DB::insert('insert into users (name, email) values (?,?)', ['teste1', 'teste1@gmail.com']);
        DB::insert('insert into users (name, email) values (?,?)', ['teste2', 'teste2@gmail.com']);
    }
}
