<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContatoPrincipal extends Model
{

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fornecedores_id',
        'telefone',
        'tipo_telefone',
        'email',
        'tipo_email'
    ];
}
