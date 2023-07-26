<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\NoRek;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class NoRekController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('norek.index'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $norek = NoRek::all();
        $userId2 = auth()->id();
        $userId = auth()->id();
        $bank = Bank::all();
        $norekk = NoRek::where('user_id', $userId2)->get();


        // dd($bank);

        return view('pages.NoRek.index', [
            'norek'   => $norek,
            'bank'    => $bank,
            'userId'  => $userId,
            'norekk'   => $norekk

        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_penerima' => 'required|max:255|min:4',
            'no_rekening' => 'required|max:17|min:10',
            'bank_id' => 'required',
            'user_id' => 'required',

        ]);
        // dd($request);
        NoRek::create($validateData);
        return redirect()->route('norek.index')->with('success', '👋 Added data successfuly !   Jelly oat cake candy jelly');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('norek.edit'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $edit = NoRek::find($id);
        $bank = Bank::all();
        $norek = NoRek::all();
        $userId = auth()->id();
        $userId2 = auth()->id();
        $norekk = NoRek::where('user_id', $userId2)->get();



        return view('pages.NoRek.index', [
            'edit'   => $edit,
            'bank'   => $bank,
            'norek'   => $norek,
            'userId'  => $userId,
            'norekk'   => $norekk


        ]);
    }

    public function update(Request $request, $id)
    {
        $input  = $request->all();
        $norek   = NoRek::find($id);
        // dd($input);
        $norek->update($input);

        return redirect()->route('norek.index')
            ->with('success', '👋 Update data successfuly !   Jelly oat cake candy jelly');
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('norek.delete'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $delete = NoRek::find($id);
        $delete->delete();
        return redirect()->route('norek.index')
            ->with('success', '👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }
}