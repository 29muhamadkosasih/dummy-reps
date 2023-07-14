<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        $form = Form::where('from_id', $userId)->sum('jumlah_total');
        $forms = Form::where('from_id', $userId)->get();
        $formss = Form::where('from_id', $userId)->count('created_at');
        $weeklyData = Form::selectRaw('WEEK(created_at) as week, SUM(jumlah_total) as total')
        ->groupBy('week')
        ->get();
        // dd($weeklyData);

        return view('pages.dashboard.index', [
        'form' => $form,
        'forms' => $forms,
        'formss' => $formss,
        'weeklyData' => $weeklyData,
        ]);
    }


    // public function grafik()
    // {
    //     $weeklyData = Form::selectRaw('WEEK(tanggal) as week, SUM(jumlah_total) as total')
    //         ->groupBy('week')
    //         ->get();

    //     $weeks = $weeklyData->pluck('week')->toArray();

    //     return view('pages.dashboard.index', compact('weeks', 'weeklyData'));
    // }



}

// $total_harga =Form::select(DB::raw("CAST(SUM(total) as int) as jumlah_total"))
// ->GroupBy(DB::raw("Month(tanggal_kebutuhan)"))
// ->pluck('jumlah_total');

// // // dd($total_harga);

// $bulan =Form::select(DB::raw("MONTHNAME(tanggal_kebutuhan) as bulan"))
// ->GroupBy(DB::raw("MONTHNAME(tanggal_kebutuhan)"))
// ->pluck('bulan');

// dd($bulan);
