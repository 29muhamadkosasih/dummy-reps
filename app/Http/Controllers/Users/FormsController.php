<?php

namespace App\Http\Controllers\Users;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class FormsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form-list.index'), Response::HTTP_FORBIDDEN, 'Forbidden');

         $form = Form::where('status', '4')->get();
        // dd($form);
        return view ('pages.form.selesai.index',[
            'form' =>$form
        ]);
    }

        public function show($id)
    {
        $show =Form::find($id);
        return view('pages.form.selesai.show', [
            'show'   =>$show
        ]);

    }
}