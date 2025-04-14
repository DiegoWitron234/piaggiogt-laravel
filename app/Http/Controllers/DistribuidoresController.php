<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DistribuidoresController extends Controller
{
    public function index()
    {
        // Retorna la vista del formulario de distribuidores.
        return view('distribuidores'); // O el nombre de la vista donde se encuentre el formulario.
    }

    public function send(Request $request)
    {
        // Valida los datos ingresados en el formulario.
        $validated = $request->validate([
            'nombre'         => 'required|string|max:255',
            'apellidos'      => 'required|string|max:255',
            'estado'         => 'required|string',
            'ciudad'         => 'required|string',
            'telefono'       => 'nullable|string|max:20',
            'correo'         => 'required|email|max:255',
            'ciudad_interes' => 'nullable|string|max:255',
            'entero'         => 'required|string|max:255',
            'tiene_negocio'  => 'required|in:1,0',
            'negocio'        => 'nullable|string|max:255',
            'local'          => 'required|in:1,0',
            'capital'        => 'required|in:1,2',
        ]);

        // Prepara los datos para el email.
        $data = [
            'nombre'         => $validated['nombre'],
            'apellidos'      => $validated['apellidos'],
            'estado'         => $validated['estado'],
            'ciudad'         => $validated['ciudad'],
            'telefono'       => $validated['telefono'] ?? 'No proporcionado',
            'correo'         => $validated['correo'],
            'ciudad_interes' => $validated['ciudad_interes'] ?? 'No proporcionado',
            'entero'         => $validated['entero'],
            'tiene_negocio'  => ($validated['tiene_negocio'] == '1') ? 'Sí' : 'No',
            'negocio'        => $validated['negocio'] ?? 'No especificado',
            'local'          => ($validated['local'] == '1') ? 'Sí' : 'No',
            'capital'        => ($validated['capital'] == '1') ? 'Un millón' : 'Más de un millón',
        ];

        // Envía el correo electrónico utilizando la plantilla 'emails.distribuidor'
        Mail::send('emails.distribuidor', $data, function ($message) use ($data) {
            $message->to('ventas@piaggiogt.com', 'Piaggiogt')
                ->subject('Nuevo mensaje de distribuidor de ' . $data['nombre'] . ' ' . $data['apellidos'])
                ->replyTo($data['correo'], $data['nombre'] . ' ' . $data['apellidos']);
        });

        // Si el formulario se envía vía AJAX, retornamos un JSON.
        return response()->json(['message' => '¡Tu mensaje ha sido enviado!']);
    }
}
