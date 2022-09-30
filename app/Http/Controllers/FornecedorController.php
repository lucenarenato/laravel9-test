<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\ContatoAdicional;
use App\Models\ContatoPrincipal;
use App\Models\Fornecedor;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\FornecedorRepository;

class FornecedorController extends Controller
{
    protected $repository;
    protected $permission = 'valores';

    /**
     * ValoresController constructor.
     * @param FornecedorRepository $repository
     */
    public function __construct(FornecedorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $fornecedor = Fornecedor::all();

        return view('fornecedor/fornecedores', ['fornecedores' => $fornecedor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $estados = State::all();
        //\Log::debug(json_encode($estados));
        $cidades = City::all();
        //\Log::debug(json_encode($cidades));
        return view('fornecedor/cadastro', [
            'estados' => $estados,
            'cidades' => $cidades
        ]);
    }

    public function store(Request $request)
    {
        $resposta = $this->repository->store($request);

        return redirect('fornecedores')->with('flash_message', $resposta['mensagem'] );
    }

    public function view($id)
    {
        //$fornecedor = Fornecedor::where('id', $id)->first();
        $fornecedor = DB::table('fornecedores')
                // ->select(
                //     "fornecedores.id",
                // )
                ->where('fornecedores.id', $id)
                ->leftJoin("contato_principals", "contato_principals.fornecedores_id", "=", "fornecedores.id")
                ->first();
        \Log::debug(json_encode($fornecedor));
        return view('fornecedor/view', ['fornecedores' => $fornecedor]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ContatoAdicional::where('fornecedores_id', '=',$id)->delete();
        ContatoPrincipal::where('fornecedores_id', '=', $id)->delete();
        Fornecedor::destroy($id);

        return redirect('fornecedores')->with('flash_message', 'Student deleted!');
    }
}
