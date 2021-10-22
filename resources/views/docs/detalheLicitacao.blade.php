@extends('master.master')

@section('content')

<div class="container-fluid">
    <div class="row float-left">
        <div class="col-md-12">
            <div class="col">
                <div class="row">
                    <div class="col-sm-12 text-dark text-center my-3">
                        <h1>Informações da Licitação</h1>
                        <hr class="mt-2 mb-2">
                    </div>

                    <div class="card">
                        <h5 class="card-header"> {{$licitacoes->numeroLicitacao}} </h5>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>                            
                                    <tr>
                                        <th scope="col">Número</th>
                                        <th scope="col">Data</th>
                                        
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($detalheLicitacao as $down)
                                    <tr>
                                        <td>{{ $down->tituloLicitacao }}</td>
                                        <td>{{ date('d/m/Y', strtotime($down['dtPub'])) }}</td>
                                        
                                        <td>
                                            <a href="/storage/sistema/arquivos/licitacao/{{$down->nomeArq}}" stream="/storage/sistema/arquivos/licitacao/{{$down->nomeArq}}" class="btn btn-primary"  target="_blank">Abrir</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>                            
                        </div>
                    </div>
                    <br> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection