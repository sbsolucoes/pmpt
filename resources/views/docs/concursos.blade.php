@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-12 mh-100">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 text-dark text-center my-3">
                            <h1>Concursos </h1>
                            <hr class="mt-2 mb-2">
                        </div>
                    </div>
                    
                    @if(isset($concurso) && count($concurso) > 0)
                    @foreach($concurso as $down)
                    <div class="card">
                        <h5 class="card-header">{{ $down->tipoConc }} - {{ $down->numero }}</h5>
                        <div class="card-body">
                          
                          <!--<p class="card-text">Data da Publicação - {{ date('d/m/Y', strtotime($down['data_Pub'])) }}</p>-->
                          <a href="{{route('conc_det', $down->id_conc)}}"  class="btn btn-primary">Mais informações</a>
                        </div>
                    </div>
                      <br>

                        @endforeach

                </div>

                <div class="d-flex justify-content-center">
                    @endif                  
                        
                        {{$concurso->links()}}
    
                    
                </div>

                 
            </div>
        </div>
    </div>    

@endsection
