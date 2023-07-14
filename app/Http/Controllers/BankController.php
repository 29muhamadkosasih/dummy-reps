<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index()
    {
        $bank =Bank::all();
        return view('pages.bank.index',[
            'bank'    =>$bank
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bank'=>['required'],

        ]);

        Bank::create($request->all());
        return redirect()->route('bank.index')->with('success','👋 Added data successfuly !   Jelly oat cake candy jelly');
    }

    public function edit($id)
    {
        $edit =Bank::find($id);
        $bank =Bank::all();
        return view('pages.bank.index',[
            'edit'   =>$edit,
            'bank'    =>$bank
        ]);

    }

    public function update(Request $request, $id)
    {
        $input  = $request->all();
        $bank   = Bank::find($id);
        // dd($id);
        $bank->update($input);

        return redirect()->route('bank.index')
                             ->with('success','👋 Update data successfuly !   Jelly oat cake candy jelly');
    }


    public function destroy($id)
    {
        $delete = Bank::find($id);
        $delete->delete();
        return redirect()->route('bank.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }


}
