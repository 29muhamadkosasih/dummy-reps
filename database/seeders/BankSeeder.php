<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank')->insert([
            'nama_bank' => ('Bank BCA'),
        ]);
        DB::table('bank')->insert([
            'nama_bank' => ('Bank BRI'),
        ]);
        DB::table('bank')->insert([
            'nama_bank' => ('Bank BNI'),
        ]);
        DB::table('bank')->insert([
            'nama_bank' => ('Bank Mandiri'),
        ]);
        DB::table('bank')->insert([
            'nama_bank' => ('Bank CIMB'),
        ]);
    }
}
