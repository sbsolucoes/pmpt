@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-8">
                <div class="col">
                    <hr class="mt-2 mb-2">
                    @foreach ($hospedaria as $h)
        <h2 class="font-weight-light text-center text-lg-left mt-2 mb-1">{{ $h->tipo }}</h2>
        <hr class="mt-2 mb-2">
                    <div class="row g-5">
                       
                            <div class="col-sm-4">
                                <div class="card border-1">
                                    <img src="{{ url('storage/sistema/turismo/images/'.$h->foto) }}" class="card-img-top" alt="{{ $h->nome }}">                                   

                                    <div class="card-body">
                                        
                                        <h3 class="card-title fw-bolder text-uppercase">{{ $h->nome }}</h3>
                                        <p class="card-title fw-bolder">Categoria: {{ $h->tipo }}</p>
                                        <p class="card-title fw-bolder">End: {{ $h->endereco }}</p>
                                        <p class="card-title fw-bolder">Bairro: {{ $h->bairro }}</p>
                                        <p class="card-title fw-bolder">Telefone: {{ $h->telefone }}</p>
                                        <p class="card-title fw-bolder">Email:{{ $h->email }}</p>
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-4 float-right">
                <div class="row ">
                    <nav class="navbar navbar-light bg-light">
                        

                    </nav>
                    <nav class="navbar navbar-light">


                    </nav>
                </div>

                <div class="col text-left">
                    <div class="row">
                        <div class="container-fluid  text-white text-center">                            
                            
                            <h4 style="background-color: #051724; width: 100%; height: 70px; text-white " class="d-flex align-items-center justify-content-center">História (cunho turístico)</h4>
                            <h4 style="background-color: #051724; width: 100%; height: 70px; text-white "class="d-flex align-items-center justify-content-center">Coordenação / Contatos</h4>
                            <h4 style="background-color: #051724; width: 100%; height: 70px; text-white "class="d-flex align-items-center justify-content-center">Calendário Anual de Eventos</h4>
                            <h4 style="background-color: #051724; width: 100%; height: 70px; text-white "class="d-flex align-items-center justify-content-center">Pontos Turísticos</h4>
                            <h4 style="background-color: #051724; width: 100%; height: 70px; text-white "class="d-flex align-items-center justify-content-center">Eventos do Mês</h4>                            
                            <h4 style="background-color: #051724; width: 100%; height: 70px; text-white "class="d-flex align-items-center justify-content-center">Hoteis</h4>
                            <h4 style="background-color: #051724; width: 100%; height: 70px; text-white "class="d-flex align-items-center justify-content-center">Pousadas</h4>
                            <h4 style="background-color: #051724; width: 100%; height: 70px; text-white "class="d-flex align-items-center justify-content-center">Restaurantes e Alimentação</h4>
                            <h4 style="background-color: #051724; width: 100%; height: 70px; text-white "class="d-flex align-items-center justify-content-center">Comércio</h4>
                            <h4 style="background-color: #051724; width: 100%; height: 70px; text-white "class="d-flex align-items-center justify-content-center">Telefones Úteis</h4>
                                        
                        </div>
                    </div>
                </div>
            </div>

                
            </div>
        </div>
    </div>
    

@endsection

