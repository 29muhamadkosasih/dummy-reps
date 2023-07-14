<?php

namespace Database\Seeders;

use App\Models\NoRek;
use Illuminate\Database\Seeder;

class NoRekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
           [
               'bank_id' => '1',
               'no_rekening' => '02111111',
               'nama_penerima'   =>'Muhamad Kosasih'
           ],
           [
            'bank_id' => '1',
            'no_rekening' => '0204442334',
            'nama_penerima'   =>'Muhamad'
            ],
            [
                'bank_id' => '1',
                'no_rekening' => '000232332',
                'nama_penerima' => 'Kosasih'
            ],
            [
                'bank_id' => '1',
                'no_rekening' => '0909420223',
                'nama_penerima' => 'Abdul'
            ],
            [
                'bank_id' => '2',
                'no_rekening' => '023123',
                'nama_penerima' => 'Manuel'
            ], [
                'bank_id' => '2',
                'no_rekening' => '022232',
                'nama_penerima' => 'Doe'
            ],
            [
                'bank_id' => '3',
                'no_rekening' => '021111',
                'nama_penerima' => 'Field'
            ], [
                'bank_id' => '3',
                'no_rekening' => '0100101010',
                'nama_penerima' => 'Max'
            ], [
                'bank_id' => '4',
                'no_rekening' => '02',
                'nama_penerima' => 'Wy'
            ],
        ];

           NoRek::insert($name);

       }
}
