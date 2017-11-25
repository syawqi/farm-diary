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
        DB::table('users')->insert([
            'name' => str_random(10),
            'username' => 'administrator',
            'phone' => '085246835247',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'rules' => 'super'
        ]);
    }
}
