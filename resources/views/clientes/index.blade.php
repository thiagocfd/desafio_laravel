@extends('layout.template')
@section('main')

    @include('clientes.partials.search')
    <div class="row">
        <div class="col-md d-flex justify-content-between align-items-center">
            <h1>Listagem de Clientes</h1>
            <a href="{{route('cliente.create')}}" class="btn btn-success">Cadastrar novo</a>
        </div>
    </div>

    @include('messages.messages')

    <div class="table-responsive">
        <table class="table table-striped mt-5">
            <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">CPF</th>
                  <th scope="col">RG</th>
                  <th scope="col">Cadastro</th>
                  <th scope="col">Atualização</th>
                  <th scope="col">Usuário Cadastro</th>
                  <th scope="col">Usuário Atualização</th>
                  <th scope="col">Data de Nascimento</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Local de Nascimento</th>
                  <th scope="col" width="150"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                <tr>
                  <td scope="col">{{ $cliente->name }}</td>
                  <td scope="col">{{ $cliente->cpf }}</td>
                  <td scope="col">{{ $cliente->rg }}</td>
                  <td scope="col">{{ $cliente->created_at->format('d/m/Y h:m:s') }}</td>
                  <td scope="col">{{ $cliente->updated_at->format('d/m/Y h:m:s') }}</td>
                  <td scope="col">{{ $cliente->creator->name ?? '' }}</td>
                  <td scope="col">{{ $cliente->updater->name ?? '' }}</td>
                  <td scope="col">{{ $cliente->birth_date->format('d/m/Y') }}</td>
                  <td scope="col">{{ $cliente->phone_number }}</td>
                  <td scope="col">{{ $cliente->state_birth }}</td>
                  <td scope="col">
                    <a class="btn btn-primary btn-sm" href="{{route('cliente.edit', $cliente->id)}}">Editar</a>
                    <a class="btn btn-danger btn-sm" onclick="deleteInDatabase('{{route('cliente.destroy', $cliente->id)}}', '{{$cliente->id}}')">Excluir</a>
                  </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt=5">
        {{ $clientes->appends(['keyword'=>request()->get('keyword')])->links() }}
    </div>

@endsection
