<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jabatan;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function index()
    {
        $jabatan =Jabatan::all();
        $departement =Departement::all();
        // dd($jabatan);
        $user =User::all();
        // $decrypt= Crypt::decrypt($user->password);
        // dd($decrypt);
        return view('pages.user.index', [
            'user'   =>$user,
            'jabatan'   =>$jabatan,
            'departement'  =>$departement
        ]);
    }

    public function store(Request $request)
    {

        // dd($request);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'jabatan_id' => $request->jabatan_id,
            'departement_id' => $request->departement_id,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.index')->with('success','👋 Added data successfuly !   Jelly oat cake candy jelly');
    }

    public function edit($id)
    {
        $edit = User::find($id);
        $jabatan =Jabatan::all();
        $user = User::get();
                $departement =Departement::all();

        return view('pages.user.index',compact('edit', 'user', 'jabatan','departement'));
    }


    public function update(Request $request, $id)
    {
        $user   = User::find($id);
        // dd($user);
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'jabatan_id' => $request->jabatan_id,
            'departement_id' => $request->departement_id,
            'password' => Hash::make($request->password),
        ]);
        // dd($request);
        return redirect()->route('user.index')
                             ->with('success','👋 Update data successfuly !   Jelly oat cake candy jelly');
    }
    public function destroy($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect()->route('user.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }
}