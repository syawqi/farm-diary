<?php

use Illuminate\Database\Seeder;

class BalanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pendapatans')->truncate();

      DB::table('pendapatans')->insert([
          'sumber' => 'Penjualan Hasil Pertanian',
          'farms_id' => 1,
          'total' => 10,
          'unit' => 'Kg',
          'pendapatan' => 3000000,
          'date' => '2017/5/01',
          'month' => 'Mei',
          'years' => '2017'
      ]);
      DB::table('pendapatans')->insert([
          'sumber' => 'Penjualan Hasil Pertanian',
          'farms_id' => 1,
          'total' => 3,
          'unit' => 'Kg',
          'pendapatan' => 1000000,
          'date' => '2017/5/10',
          'month' => 'Mei',
          'years' => '2017'
      ]);


      DB::table('pengeluarans')->truncate();


      DB::table('pengeluarans')->insert([
          'sumber' => 'Pemebelian Bibit',
          'farms_id' => 1,
          'total' => 10,
          'unit' => 'Kg',
          'pengeluaran' => 3000000,
          'date' => '2017/5/01',
          'month' => 'Mei',
          'years' => '2017'
      ]);
      DB::table('pengeluarans')->insert([
          'sumber' => 'Pembelian Pupuk',
          'farms_id' => 1,
          'total' => 3,
          'unit' => 'Kg',
          'pengeluaran' => 1000000,
          'date' => '2017/5/10',
          'month' => 'Mei',
          'years' => '2017'
      ]);
    }
}
