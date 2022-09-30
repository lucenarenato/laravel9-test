<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\ContatoAdicional;
use App\Models\ContatoPrincipal;
use App\Models\Fornecedore;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedor = Fornecedore::all();

        return view('fornecedor/fornecedores', ['fornecedores' => $fornecedor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $estados = State::all();
        \Log::debug(json_encode($estados));
        $cidades = City::all();
        //\Log::debug(json_encode($cidades));
        return view('fornecedor/cadastro', [
            'estados' => $estados,
            'cidades' => $cidades
        ]);
    }

    public function store(Request $request)
    {
        try {
            $fornecedores = [
                'cnpj'               => $request->cnpj,
                'razao_social'       => $request->razao_social,
                'nome_fantasia'      => $request->nome_fantasia,
                'indicador_estadual' => $request->indicador_estadual,
                'inscricao_estadual' => $request->inscricao_estadual,
                'inscricao_municipal'=> $request->inscricao_minicipal,
                'situacao_cnpj'      => $request->situacao_cnpj,
                'recolimento'        => $request->recolimento,
                'ativo_juridico'     => $request->ativo_juridico,
                'cpf'                => $request->cpf,
                'nome'               => $request->nome,
                'apelido'            => $request->apelido,
                'rg'                 => $request->rg,
                'ativo_fisico'       => $request->ativo_fisico,
                'cep'                => $request->cep,
                'logradouro'         => $request->logradouro,
                'numero'             => $request->numero,
                'complemento'        => $request->complemento,
                'bairro'             => $request->bairro,
                'ponto_referencia'   => $request->ponto_referencia,
                'uf'                 => $request->uf,
                'cidade'             => $request->cidade,
                'condominio'         => $request->condominio,
                'observacao'         => $request->observacao,
            ];

            $fornecedor = Fornecedore::create($fornecedores);

            foreach($request->telefone as $key => $value){
                $dados_pricipal = [
                    'fornecedores_id' => $fornecedor->id,
                    'telefone'      => $value,
                    'tipo_telefone' => $request->tipo_telefone[$key],
                    'email'         => $request->email[$key],
                    'tipo_email'    => $request->tipo_email[$key],
                ];
                $contato_pricipal = ContatoPrincipal::create($dados_pricipal);

            }

            if($request->nome_adicionais){
                foreach($request->nome_adicionais as $key => $value){
                    $contato_adicional = [
                        'fornecedores_id'     => $fornecedor->id,
                        'nome_adicionais'   => $value,
                        'empresa_adicionais'=> $request->empresa_adicionais[$key],
                        'cargo_adicionais'  => $request->cargo_adicionais[$key],
                        'telefone_adicionais' => $request->telefone_adicionais[$key],
                        'tipo_telefone_adicionais' => $request->tipo_telefone_adicionais[$key],
                        'email_adicionais' => $request->email_adicionais[$key],
                        'tipo_email_adicionais' => $request->tipo_email_adicionais[$key],
                    ];
                    $contato_adicional = ContatoAdicional::create($contato_adicional);
                }
            }


            $resposta['status'] = true;
            $resposta['mensagem'] = 'Fornecedor cadastrado com sucessso!';
            DB::commit();
        } catch (\Exception $e) {
            $resposta['status'] = false;
            $resposta['mensagem'] = $e->getMessage();
            DB::rollBack();
        }

        return redirect('fornecedores')->with('flash_message', $resposta['mensagem'] );
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
        Fornecedore::destroy($id);

        return redirect('fornecedores')->with('flash_message', 'Student deleted!');
    }
}
