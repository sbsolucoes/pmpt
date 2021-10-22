@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-12">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 text-dark text-center my-3">
                            <h1>Licitação</h1>
                            <form action="#" method="post">
                                @csrf
                            <select class="form-select" aria-label="Default select example" name="tipoLic">
                                <option selected>Escolha o tipo de Licitação</option>                                                                
									<option value="2" label="Chamada Pública">Chamada Pública</option>
									<option value="3" label="Concorrência Pública">Concorrência Pública</option>
									<option value="4" label="Leilão">Leilão</option>
									<option value="5" label="Pregão Eletrônico">Pregão Eletrônico</option>
									<option value="6" label="Pregão Presencial">Pregão Presencial</option>	
									<option value="7" label="Tomada de Preços">Tomada de Preços</option>
                              </select>
                              <br>                              
                                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                            </form>
                                
                            <hr class="mt-2 mb-2">
                        </div>
                    </div>
                    
                    @if(isset($licitacao) && count($licitacao) > 0)
                    @foreach($licitacao as $down )
                    <div class="card">
                        <h5 class="card-header">Nº {{ $down->numeroLicitacao }}</h5>
                        <div class="card-body">
                          
                          <p class="card-text">{!!html_entity_decode($down->content)!!}</p>
                          <a href="{{route('detalheLicitacao', $down->idLicitacao)}}"  class="btn btn-primary">Abrir</a>
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