@extends('layout.template')
@section('main')


<form action="{{route('cliente.update', $cliente->id)}}" method="post">

    @csrf
    @method('put')

    @include('clientes.partials.form')
    
</form>

@endsection

