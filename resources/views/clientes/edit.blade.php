@extends('layout.template')
@section('main')


<form action="{{route('cliente.update', $cliente->id)}}" method="post">

    @csrf
    @method('put')

    <div class="form_create">
        <div class="row">
            <div class="col-md d-flex justify-content-between align-items-center">
                <h1>Atualização de usuário</h1>
                <a href="{{route('cliente.store')}}" class="btn btn-primary">Voltar para a listagem</a>
            </div>
        </div>

        @include('messages.messages')

        <div class="col-md-5">
            <div class="mb-3">
                <label for="name" class="form-label">Nome do usuário</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ex.: João da Silva" value="{{$cliente->name ?? ''}}" >
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{$cliente->cpf ?? ''}}" >
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3">
                <label for="name" class="form-label">RG</label>
                <input type="text" class="form-control" id="rg" name="rg" value="{{$cliente->rg ?? ''}}" >
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3">
                <label for="user_register" class="form-label">Usuário responsável pelo cadastro</label>
                <input type="text" class="form-control" id="user_register" name="user_register" value="{{$cliente->user_register ?? ''}}" readonly>
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3">
                <label for="user_update" class="form-label">Usuário responsável pela atualização</label>
                <input type="text" class="form-control" id="user_update" name="user_update" value="{{auth()->user()->name ?? ''}}" readonly>
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3">
                <label for="birth_date" class="form-label">Data de nascimento</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{$cliente->birth_date->format('Y-m-d') ?? ''}}" >
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3">
                <label for="phone_number" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{$cliente->phone_number ?? ''}}" >
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3">
                <label for="state_birth" class="form-label">Estado de nascimento</label>
                <select name="state_birth" id="state_birth" class="form-select" >
                    <option>BA</option>
                    <option>SP</option>
                </select>
            </div>
        </div>
        <div class="row">
        <div class="col-md">
            <hr>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
        </div>
    </div>
</form>

@endsection

