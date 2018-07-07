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

        DB::table('users')->insert([
            'name'=> 'caren',
            'lastname' => 'develop',
            'email' => 'caren@gmail.com',
            'password' => bcrypt('caren'),
            'idgrupo' => 1,
        ]);
    }
}
