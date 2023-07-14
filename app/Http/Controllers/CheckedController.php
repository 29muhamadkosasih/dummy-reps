<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckedController extends Controller
{
    public function index()
    {
        $form = Form::all();
        $departement = Departement::all();

        // dd($form);
        return view('pages.form.checked.index',[
            'form'   =>$form,
            'departement'  =>$departement
        ]);
    }

    public function show($id)
    {
        $show =Form::find($id);
        return view('pages.form.checked.show', [
            'show'   =>$show
        ]);

    }

    public function detail($id)
    {
        $show = Form::find($id);
        // dd($show);
        return view('pages.form.checked.detail',[
            'show'   =>$show
        ]);
    }

        public function edit($id)
    {
        $edit = Form::find($id);
        $departement = Departement::all();

        return view('pages.form.checked.edit',[
            'edit'   =>$edit,
            'departement'  =>$departement
        ]);
    }

        public function update(Request $request, $id)
    {
        $data = Form::findOrFail($id);
        // dd($date);

        // dd($request->all());
        $total = $request->qty * $request->price;
        $total2 = $request->qty2 * $request->price2;
        $total3 = $request->qty3 * $request->price3;
        $total4 = $request->qty4 * $request->price4;
        $jumlah = $total + $total2 ;
        $jumlah2 = $total3 + $total4 ;
        $total_jumlah = $jumlah + $jumlah2;
                // dd($jumlah);
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
            'jumlah_total' => $total_jumlah,
        ]);

        // dd($data);
        return redirect()->route('form-checked.index')
        ->with('success', 'Congratulation !  Data Berhasil DiUpdate');
    }

        public function checked(Request $request, $id)
    {
        $data = Form::findOrFail($id);
        $userId = auth()->id();
        $date =date('y-m-d');
        // dd($date);

        // dd($data);
        $total = $request->qty * $request->price;
        $total2 = $request->qty2 * $request->price2;
        $total3 = $request->qty3 * $request->price3;
        $total4 = $request->qty4 * $request->price4;
        $jumlah = $total + $total2 ;
        $jumlah2 = $total3 + $total4 ;
        $total_jumlah = $jumlah + $jumlah2;
                // dd($jumlah);
        $data->update([
            'from_id' => $request->from_id,
            'to' => $request->to,
            'ketegori_pengajuan' => $request->ketegori_pengajuan,
            'departement' => $request->departement,
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
            'jumlah_total' => $total_jumlah,
            'status' =>1,
            'checked_by' =>$userId,
            'checked_date' =>$date
        ]);

        // dd($data);
        return redirect()->route('form-checked.index')
        ->with('success', 'Congratulation !  Data Berhasil diChecked');
    }

        public function approve($id)
        {
            $userId = auth()->id();
            $date =date('y-m-d');
            $data = Form::where('id',$id)->first();
            $data->update(
            [
                "status" =>"3",
                "checked_by"  =>$userId,
                "checked_date" =>$date

            ]);

            // dd($data);
            return back()
           ->with('success', 'Congratulation !  Data Berhasil Di Approve');
   }

       public function reject($id)
       {
        $userId = auth()->id();
        $date =date('y-m-d');
        $data = Form::where('id',$id)->first();
        $data->update(
            [
                "status"=>"2",
                "checked_by"  =>$userId,
                "checked_date" =>$date
            ]
            );
            return back()
            ->with('success', 'Congratulation !  Data Berhasil Di Reject');
    }
}