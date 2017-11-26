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
          'date'=>'2017/08/12',
          'metode' => 'Pot'
      ]);
      DB::table('farms-realization')->insert([
          'farms_id' => 1,
          'name' => 'tomat',
          'total' => 8,
          'metode' => 'Pot'
      ]);
      DB::table('farms-realization-detail')->insert([
          'farmrealization_id' => 1 ,
          'week' => 1,
          'date' => '2017/11/25',
          'value' => '9'
      ]);
      DB::table('farms-realization-detail')->insert([
          'farmrealization_id' => 1 ,
          'week' => 2,
          'date' => '2017/11/2',
          'value' => '9'
      ]);
      DB::table('farms-realization-detail')->insert([
          'farmrealization_id' => 1 ,
          'week' => 3,
          'date' => '2017/12/10',
          'value' => '8'
      ]);
      DB::table('farms-harvest')->insert([
          'farmrealization_id' => 1 ,
          'week' => 3,
          'month' => 'Februari',
          'years' => '2017',
          'date' => '2017/12/10',
          'total' => 10,
          'unit' => 'Kg'
      ]);
    }
}
