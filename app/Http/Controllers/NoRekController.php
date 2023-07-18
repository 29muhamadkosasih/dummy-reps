<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\NoRek;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoRekController extends Controller
{
    public function index()
    {
        $norek =NoRek::all();
        $bank =Bank::all();

        // dd($bank);

        return view('pages.NoRek.index',[
            'norek'   =>$norek,
            'bank'    =>$bank,
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_penerima' => 'required|max:255|min:4',
            'no_rekening' => 'required|max:17|min:10',
            'bank_id'=>'required'

        ]);
        // dd($request);
        NoRek::create($validateData);
        return redirect()->route('norek.index')->with('success','👋 Added data successfuly !   Jelly oat cake candy jelly');
    }

    public function edit($id)
    {
        $edit = NoRek::find($id);
        $bank =Bank::all();
        $norek =NoRek::all();

        return view('pages.NoRek.index',[
            'edit'   =>$edit,
            'bank'   =>$bank,
            'norek'   =>$norek
        ]);
    }

    public function update(Request $request, $id)
    {
        $input  = $request->all();
        $norek   = NoRek::find($id);
        // dd($input);
        $norek->update($input);

        return redirect()->route('norek.index')
                             ->with('success','👋 Update data successfuly !   Jelly oat cake candy jelly');
    }

    public function destroy($id)
    {
        $delete = NoRek::find($id);
        $delete->delete();
        return redirect()->route('norek.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }
}