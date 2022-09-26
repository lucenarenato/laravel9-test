<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function show($nome_estado)
    {
        $estado = State::where('letter', $nome_estado)->get('id');
        $cidades = City::where('state_id', $estado[0]->id)->get();
        return response()->json($cidades);
    }
}
