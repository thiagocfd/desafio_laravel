<div class="row">
    <div class="col-md mb-5">

        <h3 class="mb-3" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Filtros de busca</h3>

        <div class="collapse show" id="collapseExample">
            <div class="card card-body">

                <form action="{{route('cliente.search')}}" class="row">

                    <div class="col-md-3">
                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Nome do produto" value="{{ request()->get('keyword') }}">
                    </div>

                    <div class="col-md-3">
                        <select class="form-select" id="order_by" name="order_by">
                            <option value="">Ordernar por...</option>
                            <option value="newest" selected>Mais recentes</option>
                            <option value="older">Mais antigos</option>

                        </select>
                    </div>

                    <div class="col-md-3">
                        <input type="hidden" name="action" value="search">
                        <button type="submit" class="btn btn-dark">Filtrar</button>
                        <a class="btn btn-warning" href="/cliente">Limpar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


