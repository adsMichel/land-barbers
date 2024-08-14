@csrf
<div class="card card-light">
    <div class="card-header">
        <h3 class="card-title">Dados Gerais</h3>
    </div>

    <div class="card-body">
        <div class="form-row">
            <div class="col-sm-2">
                <label class="form-label" for="tipo">Tipo</label>
                <div class="form-group">
                    <select name="tipo" id="tipo" class="form-control form-select-lg select2 @error('tipo') is-invalid @enderror">
                        <option value="" @if (isset($data) || !isset($data)) selected="selected" @endif> Selecione</option>
                        <option @if (isset($data) && $data->tipo == 'Pessoa Física') selected="selected" @endif value="Pessoa Física" {{ old('tipo') == 'Pessoa Física' ? 'selected' : ''}}>Pessoa Física</option>
                        <option @if (isset($data) && $data->tipo == 'Pessoa Jurídica') selected="selected" @endif value="Pessoa Jurídica" {{ old('tipo') == 'Pessoa Jurídica' ? 'selected' : ''}}>Pessoa Jurídica</option>
                        </select>
                    @error('tipo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-2">
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
            <div class="col-sm-4">
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
                <label for="email">E-mail</label>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $data->email ?? '') }}" autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-4" id="form-cpf">
                <label for="cpf">CPF</label>
                <div class="form-group">
                    <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf', $data->cpf ?? '') }}" autocomplete="cpf" autofocus>
                    @error('cpf')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4" id="form-rg">
                <label for="rg">RG</label>
                <div class="form-group">
                    <input id="rg" type="text" class="form-control @error('rg') is-invalid @enderror" name="rg" value="{{ old('rg', $data->rg ?? '') }}" autocomplete="rg" autofocus>
                    @error('rg')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4" id="form-nascimento">
                <label for="nascimento">Nascimento</label>
                <div class="form-group">
                    <input id="nascimento" type="date" class="form-control @error('nascimento') is-invalid @enderror" name="nascimento" value="" autocomplete="nascimento" autofocus>
                    @error('nascimento')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4" id="form-cnpj">
                <label for="cnpj">CNPJ</label>
                <div class="form-group">
                    <input id="cnpj" type="text" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" value="{{ old('cnpj', $data->cnpj ?? '') }}" autocomplete="cnpj" autofocus>
                    @error('cnpj')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4" id="form-razaoSocial">
                <label for="razaoSocial">Razão Social</label>
                <div class="form-group">
                    <input id="razaoSocial" type="text" class="form-control @error('razaoSocial') is-invalid @enderror" name="razaoSocial" value="{{ old('razaoSocial', $data->razaoSocial ?? '') }}" autocomplete="razaoSocial" autofocus>
                    @error('razaoSocial')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4" id="form-iEstadual">
                <label for="iEstadual">Inscrição Estadual</label>
                <div class="form-group">
                    <div class="input-group">
                        <input id="iEstadual" type="text" class="form-control @error('iEstadual') is-invalid @enderror" name="iEstadual" value="{{ old('iEstadual', $data->iEstadual ?? '') }}" autocomplete="iEstadual" autofocus>

                        <div class="input-group-append">
                            <span class="input-group-text">
                                <input type="checkbox" name="isentoEstadual" id="isentoEstadual" @if(isset($data) && $data->isentoEstadual) checked @endif>
                                <!-- <input type="checkbox" name="isentoEstadual" id="isentoEstadual" @if(isset($data) && $data->isentoEstadual) checked @endif>&nbsp;&nbsp;<span>&nbsp;&nbsp;ISENTO</span> -->
                            </span>
                        </div>
                        @error('iEstadual')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-4" id="form-empresaResponsavel">
                <label for="empresaResponsavel">Responsável</label>
                <div class="form-group">
                    <input id="empresaResponsavel" type="text" class="form-control @error('empresaResponsavel') is-invalid @enderror" name="empresaResponsavel" value="{{ old('empresaResponsavel', $data->empresaResponsavel ?? '') }}" autocomplete="empresaResponsavel" autofocus>
                    @error('empresaResponsavel')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <label for="celular">Celular</label>
                <div class="form-group">
                    <div class="input-group">
                        <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular', $data->celular ?? '') }}" autocomplete="celular" autofocus>

                        <div class="input-group-append">
                            <span class="input-group-text">
                                <input type="checkbox" name="whatsapp" id="whatsapp" @if(isset($data) && $data->whatsapp) checked @endif>&nbsp;&nbsp;
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                </svg>
                            </span>
                        </div>
                        @error('celular')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <label for="phone">Telefone</label>
                <div class="form-group">
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $data->phone ?? '') }}" autocomplete="phone" autofocus>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <label for="site">Rede Social / Site</label>
                <div class="form-group">
                    <input id="site" type="text" class="form-control @error('site') is-invalid @enderror" name="site" value="{{ old('site', $data->site ?? '') }}" autocomplete="site" autofocus>
                    @error('site')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <label for="tecnico">Técnico / Responsável</label>
                <div class="form-group">
                    <input id="tecnico" type="text" class="form-control @error('tecnico') is-invalid @enderror" name="tecnico" value="{{ old('tecnico', $data->tecnico ?? Auth::user()->name) }}" autocomplete="tecnico" autofocus>
                    @error('tecnico')
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
        <h3 class="card-title">Endereço</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
                <label for="tipoEndereco">Tipo</label>
                <div class="form-group">
                    <select name="tipoEndereco" id="tipoEndereco" class="form-control select2 @error('tipoEndereco') is-invalid @enderror">
                        <option value="" disabled="disabled" @if (isset($data) || !isset($data)) selected="selected" @endif> Selecione</option>
                        <option @if (isset($data) && $data->tipoEndereco == 'Comercial') selected="selected" @endif value="Comercial" {{ old('tipoEndereco') == 'Comercial' ? 'selected' : ''}}>Comercial</option>
                        <option @if (isset($data) && $data->tipoEndereco == 'Residencial') selected="selected" @endif value="Residencial" {{ old('tipoEndereco') == 'Residencial' ? 'selected' : ''}}>Residencial</option>
                        <option @if (isset($data) && $data->tipoEndereco == 'Entrega') selected="selected" @endif value="Entrega" {{ old('tipoEndereco') == 'Entrega' ? 'selected' : ''}}>Entrega</option>
                    </select>
                    @error('uf')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-3">
                <label for="cep">CEP</label>
                <div class="form-group">
                    <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep', $data->cep ?? '') }}" autocomplete="cep" autofocus>
                    @error('cep')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <label for="logradouro">Logradouro</label>
                <div class="form-group">
                    <input id="logradouro" type="text" class="form-control @error('logradouro') is-invalid @enderror" name="logradouro" value="{{ old('logradouro', $data->logradouro ?? '') }}" autocomplete="logradouro" autofocus>
                    @error('logradouro')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-2">
                <label for="numero">Número</label>
                <div class="form-group">
                    <input id="numero" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero', $data->numero ?? '') }}" autocomplete="numero" autofocus>
                    @error('numero')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label for="complemento">Complemento</label>
                <div class="form-group">
                    <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ old('complemento', $data->complemento ?? '') }}" autocomplete="complemento" autofocus>
                    @error('complemento')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-3">
                <label for="bairro">Bairro</label>
                <div class="form-group">
                    <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro', $data->bairro ?? '') }}" autocomplete="bairro" autofocus>
                    @error('bairro')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-3">
                <label for="cidade">Cidade</label>
                <div class="form-group">
                    <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ old('cidade', $data->cidade ?? '') }}" autocomplete="cidade" autofocus>
                    @error('cidade')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-3">
                <label for="uf">Estado</label>
                <div class="form-group">
                    <input id="uf" type="text" class="form-control @error('uf') is-invalid @enderror" name="uf" value="{{ old('uf', $data->uf ?? '') }}" autocomplete="uf" autofocus>
                    @error('uf')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="card card-light">
    <div class="card-header">
        <h3 class="card-title">Contato</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm-2">
                <button type="button" class="btn btn-block btn-primary btn-sm">Novo contato</button>
            </div>
        </div>
    </div>
</div> --}}

<div class="card card-light">
    <div class="card-header">
        <h3 class="card-title">Observações</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite ...">{{ old('observacao', $data->observacao ?? '') }}</textarea>
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
