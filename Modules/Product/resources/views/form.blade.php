@csrf
<div class="card card-light">
    <div class="card-header">
        <h3 class="card-title">Dados Gerais</h3>
    </div>

    <div class="card-body">
        <div class="form-row">
            <div class="col-sm-3">
                <label for="status">Situação</label>
                <div class="form-group">
                    <select name="status" id="status" class="form-control select2 @error('status') is-invalid @enderror">
                        <option @if (isset($data) && $data->status == 'Ativo') selected="selected" @endif value="Ativo" {{ old('status') == 'Ativo' ? 'selected' : ''}}>Ativo</option>
                        <option @if (isset($data) && $data->status == 'Inativo') selected="selected" @endif value="Inativo" {{ old('status') == 'Inativo' ? 'selected' : ''}}>Inativo</option>
                        <option @if (isset($data) && $data->status == 'Pendente') selected="selected" @endif value="Pendente" {{ old('status') == 'Pendente' ? 'selected' : ''}}>Pendente</option>
                    </select>
                    @error('status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-5">
                <label for="name">Nome</label>
                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $data->name ?? '') }}" autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <label for="valor">Valor</label>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                        <input id="valor" type="valor" class="form-control @error('valor') is-invalid @enderror" name="valor" value="{{ old('valor', $data->valor ?? '') }}" autocomplete="valor" autofocus>
                        @error('valor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-3" id="form-cpf">
                <label for="quantidade">Quantidade</label>
                <div class="form-group">
                    <input id="quantidade" type="text" class="form-control @error('quantidade') is-invalid @enderror" name="quantidade" value="{{ old('quantidade', $data->quantidade ?? '') }}" autocomplete="quantidade" autofocus>
                    @error('quantidade')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card card-light">
    <div class="card-header">
        <h3 class="card-title">Descrição</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Digite ...">{{ old('desc', $data->desc ?? '') }}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    <a href="{{ route('client.index')}}" class="btn btn-danger">Cancelar</a>
    <!-- <button type="submit" class="btn btn-danger">Cancelar</button> -->
    <button type="submit" class="btn btn-primary float-right">Salvar</button>
</div>
