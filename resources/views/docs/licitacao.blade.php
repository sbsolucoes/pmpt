@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 text-dark text-center my-3">
                            <h1>Licitação</h1>
                            <br>
                            <form method="get">
                                <select class="form-select" aria-label="Selecionar Licitação" name="tipoLic">
                                    <option >Escolha o tipo de Licitação</option>
                                    @foreach(config('toledo.licitacao') as $key => $liciatacao)
                                        <option value="{{ $key }}" {{ request()->input('tipoLic') == $key ? "selected" : "" }}> {{ $liciatacao }}</option>
                                    @endforeach
                                  </select>
                              <br>
                                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                            </form>

                            <hr class="mt-2 mb-2">
                        </div>
                    </div>

                    @if(isset($licitacao))
                    @foreach($licitacao as $down )
                        <div class="card">
                            <h5 class="card-header">Nº {{ $down->numeroLicitacao }}</h5>
                                <div class="card-body">
                                    <p class="card-text">{!!html_entity_decode($down->content)!!}</p>
                                    <a href="{{route('detalheLicitacao', $down->idLicitacao)}}"  class="btn btn-primary">Abrir</a>
                                </div>
                        </div>
                        <br>@endforeach
                        <div class="d-flex justify-content-center">
                            {{ $licitacao->appends(request()->query())->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
