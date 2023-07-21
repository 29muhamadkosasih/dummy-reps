<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Departement;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    public function index()
    {
        $form = Form::where('status', '3')->get();
        // dd($form);
        return view('pages.form.approve.index',[
            'form'   =>$form,
        ]);
    }

    public function show($id)
    {
        $show =Form::find($id);
        return view('pages.form.approve.show', [
            'show'   =>$show
        ]);

    }

    public function detail($id)
    {
        $show = Form::find($id);
        // dd($show);
        return view('pages.form.approve.detail',[
            'show'   =>$show
        ]);
    }

        public function edit($id)
    {
        $edit = Form::find($id);
        $departement  =Departement::all();
        return view('pages.form.approve.edit',[
            'edit'   =>$edit,
            'departement'  =>$departement
        ]);
    }

        public function update(Request $request, $id)
    {
        $data = Form::findOrFail($id);
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

        $data->update([
            'from_id' => $request->from_id,
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
        // dd($data);
        return redirect()->route('form-approve.index')
        ->with('success', 'Congratulation !  Data Berhasil DiUpdate');
    }
           public function approve($id)
        {
            $userId = auth()->id();
            $date =date('y-m-d');
            $data = Form::where('id',$id)->first();
            $data->update(
            [
                "status" =>"4",
                "checked_by"  =>$userId,
                "checked_date" =>$date

            ]);

            // dd($data);
            return back()
           ->with('success', 'Congratulation !  Data Berhasil Di Approve');
   }

    public function destroy($id)
    {
        $delete = Form::find($id);
        $delete->delete();
        return redirect()->route('form-approve.index')
        ->with('success', 'Congratulation !  Data Berhasil dihapus');
    }


}