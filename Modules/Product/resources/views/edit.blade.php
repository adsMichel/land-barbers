@extends('adminlte::page')

@section('title', 'Editar Produto')

@section('content_header')
@endsection

@section('content')
<div class="card p-3">
    <div class="card-header card-theme">
        <h3 class="card-title">Editar Produto</h3>
    </div>
    <form class="form-horizontal" action="{{ route('product.update', $id) }}" method="POST">
        @method('PUT')
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
