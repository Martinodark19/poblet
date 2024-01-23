<?php
namespace App\Http\Controllers;
use App\Models\Apuesta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Apuesta3DolaresController extends Controller
{
 public function agregarApuesta(Request $request)
{
    if (Auth::check()) {
        $userId = Auth::id(); // Obtiene el ID del usuario autenticado
        
        // Crea una nueva apuesta en la tabla "apuestas" con el ID del usuario
        Apuesta::create([
            'id_user' => $userId,
            // Agrega otros campos necesarios aquí
        ]);

        // Redirige o responde según tus necesidades
        return redirect()->route('salaa')->with('success', 'Apuesta agregada con éxito');
    } else {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para agregar una apuesta');
    }
}
}