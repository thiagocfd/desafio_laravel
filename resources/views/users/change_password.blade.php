@extends('layout.template')
@section('main')


<form action="{{route('user.changePasswordUpdate', $user->id)}}" method="post">

    @csrf
    @method('put')

    <div class="form_create">
        <div class="row">
            <div class="col-md d-flex justify-content-between align-items-center">
                <h1>Atualização de senha</h1>
                <a href="{{route('user.store')}}" class="btn btn-primary">Voltar para a listagem</a>
            </div>
        </div>

        @include('messages.messages')

        <div class="col-md-3">
            <div class="mb-3">
                <label for="password" class="form-label">Nova Senha</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmação de Senha</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
        </div>

        <div class="row">
        <div class="col-md">
            <hr>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
        </div>
    </div>
</form>

@endsection
