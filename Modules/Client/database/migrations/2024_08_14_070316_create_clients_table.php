<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('status');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->date('nascimento')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('razaoSocial')->nullable();
            $table->string('iEstadual')->nullable();
            $table->boolean('isentoEstadual');
            $table->string('tipoContribuinte')->nullable();
            $table->string('iMunicipal')->nullable();
            $table->string('iSuframa')->nullable();
            $table->string('empresaResponsavel')->nullable();
            $table->string('celular');
            $table->boolean('whatsapp');
            $table->string('phone')->nullable();
            $table->string('site')->nullable();
            $table->string('tecnico');
            $table->string('tipoEndereco')->nullable();
            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf')->nullable();
            $table->text('observacao')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
