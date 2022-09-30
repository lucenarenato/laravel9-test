<?php

namespace App\Repositories;

use App\Models\City;
use App\Models\ContatoAdicional;
use App\Models\ContatoPrincipal;
use App\Models\State;
use App\Models\Fornecedor;
use App\Validators\FornecedorValidator;
use App\Repositories\Eloquent\Repository;
use App\Services\ErrorService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;


/**
 * Class FuncionariosRepository
 * @package App\Repositories
 */
class FornecedorRepository extends Repository
{

    protected $relations = [];
    protected $deleteRelations = [];

    /**
     * @return string
     */
    public function model()
    {
        return 'App\Models\Fornecedor';
    }

    /**
     * @return mixed
     */
    public function relations()
    {
        return $this->relations;
    }

    /**
     * @return string
     */
    public function validator()
    {
        return 'App\Validators\FornecedorValidator';
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

            $fornecedor = Fornecedor::create($fornecedores);

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
        return $request;
    }

}
