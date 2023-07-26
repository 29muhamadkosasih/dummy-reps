<?php

namespace App\Http\Controllers\Admin;

use App\Models\Keperluan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class KeperluanController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('keperluan.index'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $keperluan = Keperluan::all();

        // dd($bank);

        return view('pages.keperluan.index', [
            'keperluan'    => $keperluan,
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255|min:3',
        ]);
        // dd($request);
        Keperluan::create($validateData);
        return redirect()->route('keperluan.index')->with('success', '👋 Added data successfuly !   Jelly oat cake candy jelly');
    }

    public function edit($id)
    {
        // abort_if(Gate::denies('keperluan.edit'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $edit = keperluan::find($id);
        $keperluan = keperluan::all();

        return view('pages.keperluan.index', [
            'edit'   => $edit,
            'keperluan'   => $keperluan
        ]);
    }

    public function update(Request $request, $id)
    {
        $input  = $request->all();
        $keperluan   = Keperluan::find($id);
        // dd($input);
        $keperluan->update($input);

        return redirect()->route('keperluan.index')
            ->with('success', '👋 Update data successfuly !   Jelly oat cake candy jelly');
    }

    public function destroy($id)
    {
        // abort_if(Gate::denies('keperluan.delete'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $delete = Keperluan::find($id);
        $delete->delete();
        return redirect()->route('keperluan.index')
            ->with('success', '👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }
}
