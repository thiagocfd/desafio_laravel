<div>
    <div class="row">
        <div class="col-md d-flex justify-content-between align-items-center">
            <h1>Cadastro de Clientes</h1>
            <a href="{{route('cliente.store')}}" class="btn btn-primary">Voltar para a listagem</a>
        </div>
    </div>

    @include('messages.messages')

    <div class="col-md-5">
        <div class="mb-3">
            <label for="name" class="form-label">Nome do usuário</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ex.: João da Silva" value="{{old('name') ?? ($cliente->name ?? '')}}" >
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{old('cpf') ?? ($cliente->cpf ?? '')}}" >
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-3">
            <label for="name" class="form-label">RG</label>
            <input type="text" class="form-control" id="rg" name="rg" value="{{old('rg') ?? ($cliente->rg ?? '')}}" >
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-3">
            <label for="birth_date" class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('birth_date') ?? (isset($cliente) ? $cliente->birth_date->format('Y-m-d') : '')}}">
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-3">
            <label for="phone_number" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{old('phone_number') ?? ($cliente->phone_number ?? '')}}" >
        </div>
    </div>

    <div class="col-md-3">
        <div class="mb-3">
            <label for="state_birth" class="form-label">Estado de nascimento</label>
            <select name="state_birth" id="state_birth" class="form-select" >
                <option {{ (isset($cliente) && $cliente->state_birth === 'BA') ? 'selected' : '' }}>BA</option>
                <option {{ (isset($cliente) && $cliente->state_birth === 'SP') ? 'selected' : '' }}>SP</option>
            </select>
        </div>
    </div>
    <div class="row">
    <div class="col-md">
        <hr>
        <button type="submit" class="btn btn-primary" id="btn_cliente">Registrar cliente</button>
    </div>
    </div>
</div>
