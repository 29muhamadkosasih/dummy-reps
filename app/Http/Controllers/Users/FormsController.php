<?php

namespace App\Http\Controllers\Users;

use Carbon\Carbon;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class FormsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form-list.index'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $form = Form::where('status', '>', '3')->get();
        return view('pages.form.selesai.index', [
            'form' => $form
        ]);
    }

    public function show($id)
    {
        $show = Form::find($id);
        return view('pages.form.selesai.show', [
            'show'   => $show
        ]);
    }

    public function list()
    {
        $form = Form::where('status', '8')->get();
        return view('pages.form.selesai.list', [
            'form' => $form
        ]);
    }
    public function resumeRf()
    {
        $form = Form::where('status', '1')->get();
        $jumlah_total = DB::table('form')
            ->whereDay('created_at', '100')
            ->sum('jumlah_total');
        return view('pages.form.selesai.resume', [
            'form' => $form,
            'jumlah_total' => $jumlah_total,
        ]);
    }

    public function getLaporan(Request $request)
    {
        // dd($request);
        $from = $request->from . ' ';
        $to = $request->to . ' ';
        $form = Form::whereBetween('created_at', [$from, $to])->get();
        $jumlah_total = Form::whereBetween('created_at', [$from, $to])->get()->sum('jumlah_total');


        // dd($jumlah_total);

        return view('pages.form.selesai.resume', [
            'form' => $form,
            'from' => $from,
            'to' => $to,
            'jumlah_total' => $jumlah_total,

        ]);
    }

    public function today()
    {
        $currentDay = date('d');
        $form = Form::where('status', '8')
            ->where('payment', 'Cash')
            ->whereDay('created_at', $currentDay)
            ->get();
        $currentDate = Carbon::now()->format('d-m-Y');
        $jumlah_total = DB::table('form')
            ->where('status','8')
            ->whereDay('created_at', $currentDay)
            ->where('payment', 'Cash')
            ->sum('jumlah_total');

        $form2 = Form::where('status', '8')
            ->where('payment', 'Transfer')
            ->whereDay('created_at', $currentDay)
            ->get();
        $currentDate = Carbon::now()->format('d-m-Y');
        $jumlah_total2 = DB::table('form')
            ->whereDay('created_at', $currentDay)
            ->where('payment', 'Transfer')
            ->sum('jumlah_total');



        return view('pages.form.selesai.today', [
            'form' => $form,
            'jumlah_total' => $jumlah_total,
            'currentDate' => $currentDate,
            'form2' => $form2,
            'jumlah_total2' => $jumlah_total2,
        ]);
    }
}