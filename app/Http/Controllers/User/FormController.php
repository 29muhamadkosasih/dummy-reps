<?php

namespace App\Http\Controllers\User;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function index()
    {
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