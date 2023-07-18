<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Bank;
use App\Models\Form;
use App\Models\User;
use App\Models\NoRek;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


class FormController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        $bank =Bank::get();
        $norek =NoRek::get();
        $form = Form::where('from_id', $userId)->get();
        $role =User::where('jabatan_id', $userId)->get();
        $departement = Departement::all();
        // dd($form);
        return view('pages.form.index',[
            'form'   =>$form,
            'role'   =>$role,
            'bank'   =>$bank,
            'departement'=> $departement,
            'norek'   =>$norek
        ]);
    }

    public function store(Request $request)
    {
        $userId = auth()->id();
        $request->validate([
            'qty' => 'required',
            'unit' => 'required',
            'price' => 'required',
            'departement_id' => 'required',
            'ketegori_pengajuan' => 'required',
            'payment' => 'required'
        ]);
        $total = $request->qty * $request->price;
        $total2 = $request->qty2 * $request->price2;
        $total3 = $request->qty3 * $request->price3;
        $total4 = $request->qty4 * $request->price4;
        $total5 = $request->qty * $request->price5;
        $total6 = $request->qty * $request->price6;
        $total7 = $request->qty * $request->price7;
        $total8 = $request->qty * $request->price8;

        $jumlah = $total + $total2 ;
        $jumlah2 = $total3 + $total4 ;
        $jumlah3 = $total5 + $total6 ;
        $jumlah4 = $total7 + $total8 ;
        $total_jumlah1 = $jumlah + $jumlah2;
        $total_jumlah2 = $jumlah3 + $jumlah4;
        $jumlah_akhir = $total_jumlah1 + $total_jumlah2;

        Form::create([
           'from_id' => $userId,
            'to' => $request->to,
            'ketegori_pengajuan' => $request->ketegori_pengajuan,
            'departement_id' => $request->departement_id,
            'tanggal_kebutuhan' => $request->tanggal_kebutuhan,
            'payment' => $request->payment,
            'description' => $request->description,
            'unit' => $request->unit,
            'qty' => $request->qty,
            'price' => $request->price,
            'total' => $total,
            'description2' => $request->description2,
            'unit2' => $request->unit2,
            'qty2' => $request->qty2,
            'price2' => $request->price2,
            'total2' => $total2,
            'description3' => $request->description3,
            'unit3' => $request->unit3,
            'qty3' => $request->qty3,
            'price3' => $request->price3,
            'total3' => $total3,
            'description4' => $request->description4,
            'unit4' => $request->unit4,
            'qty4' => $request->qty4,
            'price4' => $request->price4,
            'total4' => $total4,
            'description5' => $request->description5,
            'unit5' => $request->unit5,
            'qty5' => $request->qty5,
            'price5' => $request->price5,
            'total5' => $total5,
            'description6' => $request->description6,
            'unit6'=> $request->unit6,
            'qty6' => $request->qty6,
            'price6' => $request->price6,
            'total6' => $total6,
            'description7' => $request->description7,
            'unit7'=> $request->unit7,
            'qty7' => $request->qty7,
            'price7' => $request->price7,
            'total7' => $total7,
            'description8' => $request->description8,
            'unit8'=> $request->unit8,
            'qty8' => $request->qty8,
            'price8' => $request->price8,
            'total8' => $total8,
            'jumlah_total' => $jumlah_akhir,
            'norek_id' =>$request->norek_id
        ]);
        return redirect()->route('form.index')
                        ->with('success', 'Congratulation !  Data Berhasil ditambahkan');
    }

    public function show($id)
    {
        $show =Form::find($id);
        return view('pages.form.show', [
            'show'   =>$show
        ]);

    }

    public function edit($id)
    {
        $edit = Form::find($id);
        $departement = Departement::all();
        return view('pages.form.edit',[
            'edit'   =>$edit,
            'departement' =>$departement
        ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'qty' => 'required',
            'unit' => 'required',
            'price' => 'required',
            'departement_id' => 'required'
        ]);
        $data = Form::findOrFail($id);
        $userId = auth()->id();

        // dd($data);
        $total = $request->qty * $request->price;
        $total2 = $request->qty2 * $request->price2;
        $total3 = $request->qty3 * $request->price3;
        $total4 = $request->qty4 * $request->price4;
        $total5 = $request->qty * $request->price5;
        $total6 = $request->qty * $request->price6;
        $total7 = $request->qty * $request->price7;
        $total8 = $request->qty * $request->price8;

        $jumlah = $total + $total2 ;
        $jumlah2 = $total3 + $total4 ;

        $jumlah3 = $total5 + $total6 ;
        $jumlah4 = $total7 + $total8 ;

        $total_jumlah1 = $jumlah + $jumlah2;
        $total_jumlah2 = $jumlah3 + $jumlah4;

        $jumlah_akhir = $total_jumlah1 + $total_jumlah2;
                // dd($jumlah);

        $data->update([
            'from_id' => $userId,
            'to' => $request->to,
            'ketegori_pengajuan' => $request->ketegori_pengajuan,
            'departement_id' => $request->departement_id,
            'tanggal_kebutuhan' => $request->tanggal_kebutuhan,
            'payment' => $request->payment,
            'description' => $request->description,
            'unit' => $request->unit,
            'qty' => $request->qty,
            'price' => $request->price,
            'total' => $total,
            'description2' => $request->description2,
            'unit2' => $request->unit2,
            'qty2' => $request->qty2,
            'price2' => $request->price2,
            'total2' => $total2,
            'description3' => $request->description3,
            'unit3' => $request->unit3,
            'qty3' => $request->qty3,
            'price3' => $request->price3,
            'total3' => $total3,
            'description4' => $request->description4,
            'unit4' => $request->unit4,
            'qty4' => $request->qty4,
            'price4' => $request->price4,
            'total4' => $total4,
            'description5' => $request->description5,
            'unit5' => $request->unit5,
            'qty5' => $request->qty5,
            'price5' => $request->price5,
            'total5' => $total5,
            'description6' => $request->description6,
            'unit6'=> $request->unit6,
            'qty6' => $request->qty6,
            'price6' => $request->price6,
            'total6' => $total6,
            'description7' => $request->description7,
            'unit7'=> $request->unit7,
            'qty7' => $request->qty7,
            'price7' => $request->price7,
            'total7' => $total7,
            'description8' => $request->description8,
            'unit8'=> $request->unit8,
            'qty8' => $request->qty8,
            'price8' => $request->price8,
            'total8' => $total8,
            'jumlah_total' => $jumlah_akhir,
        ]);

        // dd($data);
        return redirect()->route('form.index')
        ->with('success', 'Congratulation !  Data Berhasil diupdate');
    }

    public function print($id)
    {
        $data = Form::find($id);
        $pdf = PDF::loadview('pages.form.print',[
            'data' => $data
    ]);
        return $pdf->stream('Surat-Pengajuan.pdf');
    }

    public function destroy($id)
    {
        $delete = Form::find($id);
        $delete->delete();
        return redirect()->route('form-checked.index')
        ->with('success', 'Congratulation !  Data Berhasil dihapus');
    }

    public function getBank($id)
    {
        $NoRek =NoRek::where('kode_bank', $id)->get();
        // dd($norek);
        return response()->json($NoRek);
    }

}