@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-8">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-12 text-dark text-center my-3">
                            <h1>Notícias</h1>
                            <hr class="mt-2 mb-2">
                        </div>
                    </div>
                    <div class="row g-5">
                        @foreach ($noticias as $n)
                            <div class="col-sm-4">
                                <div class="card border-0">
                                    <img src="{{ $n->url_file }}" class="card-img-top" alt="{{ $n->post_title }}">

                                    <div class="card-body">
                                        <p class="card-title fw-bolder text-uppercase">{{ $n->post_title }}</p>
                                        <a href="{{ route('noticias', $n->id) }}" class="btn btn-primary">Mais Informações</a>
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
                            <div class="container-fluid mt-2">

                                <!--Busca-->
                                <h4 style="background-color: #e3f2fd; width: 100%; height: 40px; ">
                                    .:Busca:.
                                </h4>
                                <a class="navbar-brand"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg> Pesquisar Atos e Proposituras</a>
                                <form class="d-flex" method="post" action="#">
                                    @csrf
                                    <input class="form-control me-2" type="search" name="nome"
                                        placeholder="Digite a pesquisa" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                                </form>

                            </div>

                        </nav>
                        <nav class="navbar navbar-light">
                            

                        </nav>
                    </div>

                    <div class="col text-left">
                        <div class="row">
                            <div class="container-fluid mt-2">
                                <!--Links Úteis-->
                                <hr class="mt-2 mb-2">
                                <h4 style="background-color: #e3f2fd; width: 100%; height: 40px; ">.:Acesso Rápido:.</h4>
                                <a href="#" class="nav-link text-decoration-none">Perguntas
                                    Frequentes</a>
                                <p class="text-white"></p>
                                <p class="text-white"></p>
                                <p>
                                    <a href="http://pmpedrotoledo.geosiap.net.br/portal-transparencia/" target="_blank"><img src="{{ asset('images/transparencia.png') }}" class="img-thumbnail m-1" style="max-width: 200px" alt="Portal da Transparência"></a>
                                    <a href="http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/issonline/iss.login.php" target="_blank"><img src="{{ asset('images/nota-fiscal.png') }}" class="img-thumbnail m-1" style="max-width: 200px" alt="Nota Fiscal Eletrônica"></a>
                                    <a href="{{route('licitacao')}}" target="_blank"><img src="{{ asset('images/licitacoes.png') }}" class="img-thumbnail m-1" style="max-width: 200px" alt="Licitações"></a>
                                    <a href="http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/websis/portal_transparencia/financeiro/contas_publicas/index.php?consulta=sic" target="_blank"><img src="{{ asset('images/sic.png') }}" class="img-thumbnail m-1" style="max-width: 200px" alt="Acesso à Informação"></a></p>
                                    <a href="https://email.uolhost.com.br/pedrodetoledo.sp.gov.br/" target="_blank"><img src="{{ asset('images/webmail.png') }}" class="img-thumbnail m-1" style="max-width: 200px" alt="Webmail"></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-2">
        <hr class="mt-2 mb-2">
        <h2 class="font-weight-light text-center text-lg-left mt-2 mb-1">Comunicados e Avisos</h2>
        <hr class="mt-2 mb-2">
        <div class="row">
            @foreach ($comunicado as $c)
                <div class="col" >
                    <div class="card border-0" >
                        <img class="img-fluid img-thumbnail shadow p-0" src="{{ $c->file }}"  alt="{{ $c->com_titulo }}" />
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection

