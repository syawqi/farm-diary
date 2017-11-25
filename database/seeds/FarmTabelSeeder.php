<?php

use Illuminate\Database\Seeder;

class FarmTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('farms')->truncate();
      DB::table('farms-plan')->truncate();
      DB::table('farms-realization')->truncate();

      DB::table('farms')->insert([
          'users_id' => 1,
          'name' => str_random(10),
          'lenght' => 100,
          'wide' => 200
      ]);
      DB::table('farms-plan')->insert([
          'farms_id' => 1,
          'name' => 'tomat',
          'total' => 10,
          'metode' => 'Pot'
      ]);
      DB::table('farms-realization')->insert([
          'farms_id' => 1,
          'name' => 'tomat',
          'total' => 8,
          'metode' => 'Pot'
      ]);
    }
}
