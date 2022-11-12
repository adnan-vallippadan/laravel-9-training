<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index() {
        return view('form.index');
    }

    public function submitData(Request $request) {
        return $request->all();
    }
}
