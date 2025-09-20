<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //
    public function minhaPrimeiraRota(Request $request)
    {
        $resultado = $request->primeiro * $request->segundo;

        return response()->json([
            'data' => "O resultado eh: $resultado"
        ]);
    }
}
