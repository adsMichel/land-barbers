@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
@endsection

@section('content')
<div class="card p-3">
    <div class="card-header card-theme">
        <h3 class="card-title">Editar Cliente</h3>
    </div>
    <form class="form-horizontal" action="{{ route('client.update', $id) }}" method="POST">
        @method('PUT')
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
    #form-tipoContribuinte,
    #form-iMunicipal,
    #form-iSuframa,
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
        var valor = $('#tipo').val();
        if (valor == "Pessoa Física") {
            $('#tipo').val('Pessoa Física').change();
        } else {
            $('#tipo').val('Pessoa Jurídica').change();
        }
    })
</script>
@endsection
