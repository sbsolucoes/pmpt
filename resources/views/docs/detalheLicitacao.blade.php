@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-12">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 text-dark text-center my-3">
                            <h1>Licitação - Detalhes</h1>
                            <hr class="mt-2 mb-2">
                        </div>
                    </div>
                    
                    @if(isset($detalheLicitacao) && count($detalheLicitacao) > 0)
                    @foreach($detalheLicitacao as $down)
                    <div class="card">
                        <h5 class="card-header">{{ $down->TítuloLicitacao }}</h5>
                        <div class="card-body">
                          
                          <p class="card-text">{{$down->dtPub}}</p>
                          <a href="{{$down->file}}" stream="{{$down->nomeArq}}" class="btn btn-primary" target="_blank">Abrir</a>
                        </div>
                      </div>
                      <br>

                        @endforeach

                </div>

                <div class="d-flex justify-content-center">
                    @endif                  
                        
                        {{$detalheLicitacao->links()}}
    
                    
                </div>

                 
            </div>
        </div>
    </div>    

@endsection