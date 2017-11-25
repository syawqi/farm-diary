<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => str_random(10),
            'username' => 'administrator',
            'phone' => '085246835247',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'rules' => 'super',
            'api_token' => bcrypt('admin@gmail.com')
        ]);
    }
}
