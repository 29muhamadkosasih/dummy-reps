<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Jabatan;
use App\Models\Departement;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UpdateUserPhotoRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        abort_if(Gate::denies('users.index'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $users = User::with('role')->get();
        return view('pages.users.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('users.create'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $jabatan =Jabatan::all();
        $departement =Departement::all();
        $roles = Role::pluck('title','id');
        return view('pages.users.create',[
            'jabatan'   =>$jabatan,
            'departement'  =>$departement,
            'roles'   =>$roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // User::create($request->all());
        // dd($request->all());
        //     $request->validate([
        //     'name' => 'required|max:255|min:7',
        //     'username' => 'required|max:255|min:7',
        //     'email' => 'required|email:rfc,dns',
        //     'no_hp' => 'required|max:12|min:11',
        //     'jabatan_id' => 'required',
        //     'departement_id' => 'required',
        //     'password' => 'required|max:255|min:7'
        // ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'jabatan_id' => $request->jabatan_id,
            'departement_id' => $request->departement_id,
            'role_id'    =>$request->role_id,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('users.index')->with(['status-success' => "New User Created"]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $permission
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('users.show'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $data =User::find($id);
        return view('pages.users.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        abort_if(Gate::denies('users.edit'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $user =User::find($id);
                $jabatan =Jabatan::all();
        $departement =Departement::all();
        $roles = Role::pluck('title','id');
        return view('pages.users.edit',compact('user','roles','jabatan',
            'departement'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input  = $request->all();

        // dd($request);
        $user =User::find($id);

        // dd($request);
        $user->update($input);
        return redirect()->route('users.index')->with(['status-success' => "User Updated"]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        abort_if(Gate::denies('users.delete'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $user->delete();
        return redirect()->back()->with(['status-success' => "User Deleted"]);
    }
}