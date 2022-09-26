<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContatoAdicional extends Model
{

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fornecedores_id',
        'nome_adicionais',
        'empresa_adicionais',
        'cargo_adicionais',
        'telefone_adicionais',
        'tipo_telefone_adicionais',
        'email_adicionais',
        'tipo_email_adicionais',
    ];
}
