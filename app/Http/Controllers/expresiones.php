<?php

namespace App\Http\Controllers;

use App\Models\expresion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class expresiones extends Controller
{
    //Vista de formulario
    public function vista(){
        return view('expresiones');
    }

    //Para el formulario
    public function save(Request $request)
    {

        try {
            $expresion = $this->validate($request, [

                'nombre'   => 'required|string|regex:/^[aeiouAEIOU]{1}[a]{2}[A-Z,a-z, ]+[eE]{2}[A-Z,a-z, ]+$/|max:30|min:20',
                'apellido' => 'required|string|regex:/^[aeiouAEIOU]{1}[a]{2}[A-Z,a-z, ]+[eE]{2}[A-Z,a-z, ]+$/|max:30|min:20',
                'email'    => 'required|string|email',

            ]);

            expresion::create([
                'nombre' => $expresion['nombre'],
                'apellido' => $expresion['apellido'],
                'email' => $expresion['email']
            ]);

            return redirect('/')->with('Guardado', "Guardado");

        } catch (\Exception $exception) {
            Log::debug($exception->getMessage());
            return redirect('/')->with('Error', "Error");

        }

    }

}
