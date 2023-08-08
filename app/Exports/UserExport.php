<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DB::table('users')
            ->select(
                'name',
                'username',
                'email'
            )
            ->get();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Username',
            'Email',
        ];
    }
}