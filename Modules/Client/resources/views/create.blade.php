@extends('adminlte::page')

@section('title', 'Cadastro de Cliente')

@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1><strong>Cadastro de Cliente</strong></h1>
        </div>
        <div class="col-sm-6">
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="card p-3">
    <form action="{{route('client.store')}}" method="post">
        @include('client::form')
    </form>
</div>
@endsection

@section('footer')
@include('footer')
@endsection

@section('css')
<style>
    #form-cpf,
    #form-rg,
    #form-nascimento,
    #form-cnpj,
    #form-razaoSocial,
    #form-iEstadual,
    #form-empresaResponsavel {
        display: none;
    }
</style>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#tipo').change(function() {
            var tipo = $(this).val();
            if (tipo == "Pessoa Física") {
                $('#form-cpf').show();
                $('#form-rg').show();
                $('#form-nascimento').show();
                $('#form-cnpj').hide();
                $('#form-razaoSocial').hide();
                $('#form-iEstadual').hide();
                $('#form-empresaResponsavel').hide();
            } else if (tipo == "Pessoa Jurídica") {
                $('#form-cpf').hide();
                $('#form-rg').hide();
                $('#form-nascimento').hide();
                $('#form-cnpj').show();
                $('#form-razaoSocial').show();
                $('#form-iEstadual').show();
                $('#form-empresaResponsavel').show();
            } else {
                $('#form-cpf').hide();
                $('#form-rg').hide();
                $('#form-nascimento').hide();
                $('#form-cnpj').hide();
                $('#form-razaoSocial').hide();
                $('#form-iEstadual').hide();
                $('#form-empresaResponsavel').hide();
            }
        })
        // Quando faltar algum dado required, ele voltar com o select na opção que estava e trazer os campos ocultos
        var valor = $('#tipo').val();
        if (valor == "") {
            $('#tipo').val('').change();
        } else if (valor == "Pessoa Física") {
            $('#tipo').val('Pessoa Física').change();
        } else {
            $('#tipo').val('Pessoa Jurídica').change();
        }

        function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#logradouro").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                //$("#ibge").val("");
            }

            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#logradouro").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        //$("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#logradouro").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf).change();
                                //$("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });
</script>
@endsection
