<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        $motos = Moto::when($query, function($q) use ($query) {
            $q->where('modelo', 'like', "%$query%");
        })->get();

        return view('vehiculos', compact('motos'));
    }
}
