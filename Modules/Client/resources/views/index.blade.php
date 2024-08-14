@extends('adminlte::page')

@section('title', 'JF - Clientes')

@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1><strong></strong></h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('client.create') }}" class="btn btn-primary float-sm-right button-theme"><i class="fas fa-fw fa-user-plus"></i> Novo Cliente</a>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">
                    Filtro
                </h3>
                <!-- tools box -->
                <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <form action="{{route('client.index')}}" method="GET">
                    <div class="form-row">
                        <div class="col-sm-2">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Cód.</label>
                                <input type="text" class="form-control" placeholder="Código" name="id" value="{{\Request::get('id')}}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" placeholder="Nome" name="name" value="{{\Request::get('name')}}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="text" class="form-control" placeholder="Email" name="email" value="{{\Request::get('email')}}">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label></label>
                                <button type="submit" class="form-control btn-sm btn-primary" style="margin-top: 6px">Procurar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Lista de clientes</h3>
                    </div>

                    <div class="card-body table-responsive p-0">
                        @if (isset($data) && $data->isNotEmpty())
                        <table class="table  table-striped table-bordered table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>&nbsp;Cód.</th>
                                    <th>&nbsp;Nome</th>
                                    <th>&nbsp;Tipo</th>
                                    <th>&nbsp;Situação</th>
                                    <th>&nbsp;Celular</th>
                                    <th>&nbsp;E-mail</th>
                                    <th>&nbsp;Cadastro</th>
                                    <th>&nbsp;Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr class=" {{ $item->status === 'Pendente' ? 'table-danger' : '' }}">
                                    <td class="align-middle">{{ $item->id }}</td>
                                    <td class="align-middle">{{ $item->name }}</td>
                                    <td class="align-middle">{{ $item->tipo }}</td>
                                    <td class="align-middle">{{ $item->status }}</td>
                                    <td class="align-middle">{{ $item->celular }}</td>
                                    <td class="align-middle">{{ $item->email }}</td>
                                    <td class="align-middle">{{ \Carbon\Carbon::parse($item->created_at)->tz('America/Sao_Paulo')->format('d/m/Y') }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group">
                                            <a href="{{ route('client.edit', $item->id) }}" data-toggle="tooltip" title="Editar Cliente"><button class="btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></button></a>
                                            <form action="{{ route('client.destroy', $item->id) }}" method="POST" style="display: inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn-sm btn-danger" data-toggle="tooltip" title="Excluir Cliente">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div>
                            <h5 class="ml-2">Não existe registro de clientes.</h5>
                        </div>
                        @endif
                    </div>

                </div>
                @if (isset($data) && $data->isNotEmpty())
                @if(count($data) == 1)
                <p>Foi encontrado 1 registro.</p>
                @elseif($data->total() > $data->perPage())
                <p>Exibindo {{ count($data) }} de um total de {{ $data->total() }} registros.</p>
                @else
                <p>Foram encontrados {{ count($data) }} registros.</p>
                @endif
                {{ $data->appends($_GET)->links() }}
                @endif
            </div>
        </div>
    </div>
</section>

@endsection

@section('footer')
@include('footer')
@endsection

@section('js')
@endsection
