<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Clientes</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse me-auto" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" {{(request()->segment(1)  === 'cliente') ? 'active' : ''}} href="{{route('cliente.index')}}">Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" {{(request()->segment(1)  === 'user') ? 'active' : ''}} href="{{route('user.index')}}">Usuários</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" {{(request()->segment(1)  === 'user') ? 'active' : ''}} href="{{route('user.changePassword')}}">Atualizar senha</a>
              </li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="nav-link" href="#"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        Sair
                    </a>
                </form>

              </li>
            </ul>
          </div>
          <span class="navbar-text text-light">
            Bem-vindo(a): {{ auth()->user()->name}}
          </span>
        </div>
      </nav>

      <div class="container">
          <div class="row mt-5">
              <div class="col-md">
                    @yield('main')
              </div>
          </div>
      </div>

      <form id="delete_form" action="" method="post">
          @csrf
          @method('delete')
      </form>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      <script>
          const order_by = document.querySelector('#order_by');

          order_by.value = "{{ request()->get('order_by')}}";

          function deleteInDatabase(path){
            if(confirm('Você está removendo esse registro. Deseja continuar?')) {
                const deleteForm = document.querySelector('#delete_form');
                deleteForm.action = path;

                deleteForm.submit();
            }
          }

      </script>

    </body>
</html>

