<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        [
            'name' => 'Muhamad Kosasih',
            'email' => 'muhamadkosasih@gmail.com',
            'password' => Hash::make('password'),
            'jabatan_id'   =>'1',
            'departement_id'=>'14',
            'username' => 'muhamadkosasih',
            'no_hp'  =>'08558955539'

        ],
        [
            'name' => 'Manajer',
            'email' => 'manajer@gmail.com',
            'password' => Hash::make('password'),
            'jabatan_id'   =>'3',
            'departement_id'=>'1',
            'username' => 'manajer',
            'no_hp'  =>'08558955239'
        ],
        [
            'name' => 'Finance',
            'email' => 'finance@gmail.com',
            'password' => Hash::make('password'),
            'jabatan_id'   =>'3',
            'departement_id'=>'1',
            'username' => 'finance',
            'no_hp'  =>'08558955200'
        ],
                [
            'name' => 'Fadillah',
            'email' => 'fadillah@gmail.com',
            'password' => Hash::make('password'),
            'jabatan_id'   =>'1',
            'departement_id'=>'13',
            'username' => 'fadillah',
            'no_hp'  =>'08558955100'
        ],
                [
            'name' => 'Bayu',
            'email' => 'bayu@gmail.com',
            'password' => Hash::make('password'),
            'jabatan_id'   =>'1',
            'departement_id'=>'14',
            'username' => 'bayu',
            'no_hp'  =>'08558955211'
        ],
    ];
    User::insert($users);
    }
}