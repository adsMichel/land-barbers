<?php

namespace Modules\Client\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Client\Database\Factories\ClientFactory;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'tipo',
        'status',
        'name',
        'email',
        'cpf',
        'rg',
        'nascimento',
        'cnpj',
        'razaoSocial',
        'iEstadual',
        'isentoEstadual',
        'tipoContribuinte',
        'iMunicipal',
        'iSuframa',
        'empresaResponsavel',
        'celular',
        'whatsapp',
        'phone',
        'site',
        'tecnico',
        'tipoEndereco',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'observacao',
    ];

    protected static function newFactory()
    {
        //return ClientFactory::new();
    }
}
