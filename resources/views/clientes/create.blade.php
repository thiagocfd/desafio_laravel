@extends('layout.template')
@section('main')


<form action="{{route('cliente.index')}}" method="post">

    @csrf

    @include('clientes.partials.form')

</form>

<script src="/js/jquery-3.6.0.min.js"></script>
<script>

    $('#btn_cliente').click(function() {
        let estado = $('#state_birth').val();
        if (estado == 'SP') {
            document.getElementById("rg").required = true;
        }
        else {
            document.getElementById("rg").required = false;
        }
    });
</script>

@endsection

