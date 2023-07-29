<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use App\Models\Bank;
use App\Models\Form;
use App\Models\User;
use App\Models\NoRek;
use App\Models\Rujukan;
use App\Models\Keperluan;
use App\Models\Kpengajuan;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;


class FormController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form.index'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $userId = auth()->id();
        $bank = Bank::get();
        $norek = NoRek::where('user_id', $userId)->get();
        $kpengajuan = Kpengajuan::all();
        $keperluan = Keperluan::all();
        $rujukan = Rujukan::all();

        $form = Form::where('from_id', $userId)->get();
        $role = User::where('jabatan_id', $userId)->get();
        $departement = Departement::all();
        // dd($form);
        return view('pages.form.index', [
            'form'   => $form,
            'role'   => $role,
            'bank'   => $bank,
            'departement' => $departement,
            'kpengajuan'   => $kpengajuan,
            'keperluan'   => $keperluan,
            'rujukan'   => $rujukan,
            'norek'   => $norek,
        ]);
    }

    public function store(Request $request)
    {
        $userId = auth()->id();
        // dd($request);
        $request->validate([
            'qty' => 'required',
            'unit' => 'required',
            'price' => 'required',
            'departement_id' => 'required',
            'kpengajuan_id' => 'required',
            'payment' => 'required',
            'rujukan_id' => 'required',
            'keperluan_id' => 'required',

        ]);
        $total = $request->qty * $request->price;
        $total2 = $request->qty2 * $request->price2;
        $total3 = $request->qty3 * $request->price3;
        $total4 = $request->qty4 * $request->price4;
        $total5 = $request->qty * $request->price5;
        $total6 = $request->qty * $request->price6;
        $total7 = $request->qty * $request->price7;
        $total8 = $request->qty * $request->price8;

        $jumlah = $total + $total2;
        $jumlah2 = $total3 + $total4;
        $jumlah3 = $total5 + $total6;
        $jumlah4 = $total7 + $total8;
        $total_jumlah1 = $jumlah + $jumlah2;
        $total_jumlah2 = $jumlah3 + $jumlah4;
        $jumlah_akhir = $total_jumlah1 + $total_jumlah2;

        Form::create([
            'from_id' => $userId,
            'rujukan_id' => $request->rujukan_id,
            'kpengajuan_id' => $request->kpengajuan_id,
            'keperluan_id' => $request->keperluan_id,
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
            'unit6' => $request->unit6,
            'qty6' => $request->qty6,
            'price6' => $request->price6,
            'total6' => $total6,
            'description7' => $request->description7,
            'unit7' => $request->unit7,
            'qty7' => $request->qty7,
            'price7' => $request->price7,
            'total7' => $total7,
            'description8' => $request->description8,
            'unit8' => $request->unit8,
            'qty8' => $request->qty8,
            'price8' => $request->price8,
            'total8' => $total8,
            'jumlah_total' => $jumlah_akhir,
            'norek_id' => $request->norek_id
        ]);
        return redirect()->route('form.index')
            ->with(
                'success',
                'Success ! Data RF Berhasil di Tambahkan'
            );
    }

    public function show($id)
    {
        abort_if(Gate::denies('form.show'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $show = Form::find($id);
        return view('pages.form.show', [
            'show'   => $show
        ]);
    }

    public function edit($id)
    {
        abort_if(Gate::denies('form.edit'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $edit = Form::find($id);
        $departement = Departement::all();
        $kpengajuan = Kpengajuan::all();
        $keperluan = Keperluan::all();
        $rujukan = Rujukan::all();
        $norek = NoRek::get();

        return view('pages.form.edit', [
            'edit'   => $edit,
            'departement' => $departement,
            'kpengajuan'   => $kpengajuan,
            'keperluan'   => $keperluan,
            'rujukan'   => $rujukan,
            'norek'   => $norek,

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

        // dd($request);
        $total = $request->qty * $request->price;
        $total2 = $request->qty2 * $request->price2;
        $total3 = $request->qty3 * $request->price3;
        $total4 = $request->qty4 * $request->price4;
        $total5 = $request->qty * $request->price5;
        $total6 = $request->qty * $request->price6;
        $total7 = $request->qty * $request->price7;
        $total8 = $request->qty * $request->price8;

        $jumlah = $total + $total2;
        $jumlah2 = $total3 + $total4;

        $jumlah3 = $total5 + $total6;
        $jumlah4 = $total7 + $total8;

        $total_jumlah1 = $jumlah + $jumlah2;
        $total_jumlah2 = $jumlah3 + $jumlah4;

        $jumlah_akhir = $total_jumlah1 + $total_jumlah2;
        // dd($jumlah);

        $data->update([
            'from_id' => $userId,
            'rujukan_id' => $request->rujukan_id,
            'kpengajuan_id' => $request->kpengajuan_id,
            'departement_id' => $request->departement_id,
            'keperluan_id' => $request->keperluan_id,
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
            'unit6' => $request->unit6,
            'qty6' => $request->qty6,
            'price6' => $request->price6,
            'total6' => $total6,
            'description7' => $request->description7,
            'unit7' => $request->unit7,
            'qty7' => $request->qty7,
            'price7' => $request->price7,
            'total7' => $total7,
            'description8' => $request->description8,
            'unit8' => $request->unit8,
            'qty8' => $request->qty8,
            'price8' => $request->price8,
            'total8' => $total8,
            'jumlah_total' => $jumlah_akhir,
            'norek_id' => $request->norek_id

        ]);

        // dd($data);
        return redirect()->route('form.index')
            ->with(
                'success',
                'Success ! Data RF Berhasil di Update'
            );
    }

    public function print($id)
    {
        $data = Form::find($id);
        // dd($data);
        $pdf = PDF::loadview('pages.form.print', [
            'data' => $data
        ]);
        $pdf->set_paper('letter', 'landscape');
        return $pdf->stream('Surat-Pengajuan.pdf');
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('form.delete'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $delete = Form::find($id);
        $delete->delete();
        return redirect()->route('form-checked.index')
            ->with(
                'success',
                'Success ! Data RF Berhasil di Hapus'
            );
    }

    public function list()
    {
        $form = Form::where('status', '4')->get();
        // dd($form);
        return view('pages.form.selesai.index', [
            'form' => $form
        ]);
    }

    public function listAdvance()
    {
        $userId = auth()->id();
        $bank = Bank::get();
        $norek = NoRek::get();
        $advance = Form::where('kpengajuan_id', 'Advance')->get();
        $role = User::where('jabatan_id', $userId)->get();
        $departement = Departement::all();
        // dd($form);
        return view('pages.form.list-advance.index', [
            'advance'   => $advance,
            'role'   => $role,
            'bank'   => $bank,
            'departement' => $departement,
            'norek'   => $norek
        ]);
    }

    public function konfirmasi($id)
    {
        $userId = auth()->id();
        $date = date('y-m-d');
        $data = Form::where('id', $id)->first();
        $data->update(
            [
                "status" => "6",
            ]
        );
        return back()
            ->with('success', 'Congratulation ! Konfirmasi Dana telah berhasil');
    }
    public function konfirmasiRem($id)
    {
        $userId = auth()->id();
        $date = date('y-m-d');
        $data = Form::where('id', $id)->first();
        $data->update(
            [
                "status" => "8",
            ]
        );
        return back()
            ->with('success', 'Congratulation ! Konfirmasi Dana telah berhasil');
    }

    public function detail($id)
    {
        $show = Form::find($id);
        // dd($show);
        return view('pages.form.detail', [
            'show'   => $show
        ]);
    }

    public function kPembayaran(Request $request, $id)
    {
        // dd($request->all());
        // dd($request->jumlah_pemakaian);
        $date = date('y-m-d');
        $data = Form::findOrFail($id);

        $total = $request->qty * $request->price;
        $total2 = $request->qty2 * $request->price2;
        $total3 = $request->qty3 * $request->price3;
        $total4 = $request->qty4 * $request->price4;
        $total5 = $request->qty * $request->price5;
        $total6 = $request->qty * $request->price6;
        $total7 = $request->qty * $request->price7;
        $total8 = $request->qty * $request->price8;

        $jumlah = $total + $total2;
        $jumlah2 = $total3 + $total4;

        $jumlah3 = $total5 + $total6;
        $jumlah4 = $total7 + $total8;

        $total_jumlah1 = $jumlah + $jumlah2;
        $total_jumlah2 = $jumlah3 + $jumlah4;

        $jumlah_total = $request->jumlah_dana;
        $jumlah_total2 = $request->jumlah_pemakaian;

        // $jumlahpengakaian = $request->$jumlah_pemakaian;

        $totalBalance = $jumlah_total - $jumlah_total2;


        // dd($totalBalance);

        $data->update([
            'from_id' => $request->from_id,
            'rujukan_id' => $request->rujukan_id,
            'kpengajuan_id' => $request->kpengajuan_id,
            'departement_id' => $request->departement_id,
            'keperluan_id' => $request->keperluan_id,
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
            'unit6' => $request->unit6,
            'qty6' => $request->qty6,
            'price6' => $request->price6,
            'total6' => $total6,
            'description7' => $request->description7,
            'unit7' => $request->unit7,
            'qty7' => $request->qty7,
            'price7' => $request->price7,
            'total7' => $total7,
            'description8' => $request->description8,
            'unit8' => $request->unit8,
            'qty8' => $request->qty8,
            'price8' => $request->price8,
            'total8' => $total8,
            'jumlah_total' => $request->jumlah_total,
            'norek_id' => $request->norek_id,
            'jumlah_dana' => $request->jumlah_dana,
            'tgl_terima_dana' => $request->tgl_terima_dana,
            'tgl_pembayaran'    => $date,
            'balance'  => $totalBalance,
            'jumlah_pemakaian'    => $request->jumlah_pemakaian,
            'status' => 7,

        ]);
        // dd($data);
        return redirect()->route('form.index')
            ->with('success', 'Congratulation !  Data RF Berhasil Di Process');
    }
}
