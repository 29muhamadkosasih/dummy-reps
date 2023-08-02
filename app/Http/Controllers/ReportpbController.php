<?php

namespace App\Http\Controllers;

use App\Models\Reportpb;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportpbController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        Reportpb::create([
            'a_b' => $request->a_b,
            'b_a' => $request->b_a,
        ]);
        return back()
            ->with('success', 'Congratulation ! Pemindahan Buku Berhasil');
    }
}