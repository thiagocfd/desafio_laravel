@extends('layout.template')
@section('main')


<form action="{{route('user.index')}}" method="post">

    @csrf

    <div class="form_create">
        <div class="row">
            <div class="col-md d-flex justify-content-between align-items-center">
                <h1>Cadastro de usuários</h1>
                <a href="{{route('user.store')}}" class="btn btn-primary">Voltar para a listagem</a>
            </div>
        </div>

        @include('messages.messages')

        <div class="col-md-5">
            <div class="mb-3">
                <label for="name" class="form-label">Nome do usuário</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ex.: João da Silva" value="{{$user->name ?? ''}}" >
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$user->email ?? ''}}" >
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" value="{{$user->password ?? ''}}" >
            </div>
        </div>

        <div class="row">
        <div class="col-md">
            <hr>
            <button type="submit" class="btn btn-primary">Registrar cliente</button>
        </div>
        </div>
    </div>
</form>
@endsection

