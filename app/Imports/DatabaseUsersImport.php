<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class DatabaseUsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row);
        return new User([
            'name' => $row[0],
            'username' => $row[1],
            'email' => $row[2],
            'password' => Hash::make($row[3]),
            'role_id' => $row[4],
            'jabatan_id' => $row[5],
            'departement_id' => $row[6],
        ]);
    }
}