<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepuestosController extends Controller
{
    public function index()
    {
        return view('repuestos');
    }
}
