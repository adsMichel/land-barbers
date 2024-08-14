@extends('adminlte::page')

@section('title', 'Cadastro de Produto')

@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1><strong>Cadastro de Produtos</strong></h1>
        </div>
        <div class="col-sm-6">
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="card p-3">
    <form action="{{route('product.store')}}" method="post">
        @include('product::form')
    </form>
</div>
@endsection

@section('footer')
@include('footer')
@endsection

@section('css')
@endsection

@section('js')
@endsection
