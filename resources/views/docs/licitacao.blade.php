@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-12">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 text-dark text-center my-3">
                            <h1>Licitação</h1>
                            <hr class="mt-2 mb-2">
                        </div>
                    </div>
                    
                    @if(isset($licitacao) && count($licitacao) > 0)
                    @foreach($licitacao as $down)
                    <div class="card">
                        <h5 class="card-header">{{ $down->numeroLicitacao }}</h5>
                        <div class="card-body">
                          
                          <p class="card-text">{!!html_entity_decode($down->content)!!}</p>
                          <a href="{{route('detalheLicitacao',$down->idLicitacao)}}"  class="btn btn-primary">Abrir</a>
                        </div>
                      </div>
                      <br>

                        @endforeach

                </div>

                <div class="d-flex justify-content-center">
                    @endif                  
                        
                        {{$licitacao->links()}}
    
                    
                </div>

                 
            </div>
        </div>
    </div>    

@endsection