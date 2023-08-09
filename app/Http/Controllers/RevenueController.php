<?php

namespace App\Http\Controllers;

use App\Models\revenue;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class RevenueController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('revenue.index'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $revenue = Revenue::all();
        return view('pages.revenue.index', [
            'revenue'    => $revenue
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
        ]);

        Revenue::create($request->all());
        return redirect()->route('revenue.index')->with('success', 'Success ! Data revenue Berhasil di Tambahkan');
    }

    public function edit($id)
    {
        // abort_if(Gate::denies('revenue.edit'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $edit = Revenue::find($id);
        $revenue = Revenue::all();
        return view('pages.revenue.index', [
            'edit'   => $edit,
            'revenue'    => $revenue
        ]);
    }

    public function update(Request $request, $id)
    {
        $revenue   = Revenue::find($id);
        $this->validate($request, [
            'date' => 'required',
        ]);
        $revenue->update([
            'date'   => $request->date,
            'amount_invoice'   => $request->amount_invoice,
            'ket'   => $request->ket,
        ]);

        return redirect()->route('revenue.index')
            ->with('success', 'Success ! Data revenue Berhasil di Update');
    }


    public function destroy($id)
    {
        // abort_if(Gate::denies('revenue.delete'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $delete = Revenue::find($id);
        $delete->delete();
        return redirect()->route('revenue.index')
            ->with('success', 'Success ! Data revenue Berhasil di Hapus');
    }
}
