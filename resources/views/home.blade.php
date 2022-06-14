@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-8">
                <div class="col">
                    <div class="row text-dark">
                        <div class="col-sm-12 text-dark text-center my-3">
                           <!-- <h1>Arraiá Solidário 2022</h1><br>
                            <h2>Prêmio especial de 10.000 reais</h2><br>
                            <p>Dias 16, 17, 18 e 19/06/2022</p>
                            <p>Das 20:00 às 00:00</p>
                            <p>Realização Fundo Social da Prefeitura Municipal de Pedro de Toledo</p> 
                            <p>Entidades participantes</p>
                            <p>APAE - CCI - Escolas Municipais - Esporte, Turismo e Cultura.</p><br>
                            <p>Confira os Detalhes no Qr Code abaixo</p>
                            <p>    </p> -->
                            <a href="" target="_blank"><img src="{{ asset('images/solidario.png') }}" class="img-thumbnail m-1" style="max-width: 800px" alt="Arraiá Solidário"></a>
                            

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
                            <div class="container-fluid mt-2 text-dark">

                                <!--Busca-->
                                <h4 style="background-color: #e3f2fd; width: 100%; height: 40px; ">
                                    .:Busca:.
                                </h4>
                                <a class="navbar-brand"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg> Pesquisar Atos e Proposituras</a>
                                    <form class="d-flex" method="post" action="{{ route('atos') }}">
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
                            <div class="container-fluid mt-2 text-dark">
                                <!--Links Úteis-->
                                <hr class="mt-2 mb-2">
                                <h4 style="background-color: #e3f2fd; width: 100%; height: 40px; ">.:Acesso Rápido:.</h4>
                                <a href="#" class="nav-link text-decoration-none">Perguntas
                                    Frequentes</a>
                                <p class="text-white"></p>
                                <p class="text-white"></p>
                                <p>
                                    <a href="http://pmpedrotoledo.geosiap.net.br/portal-transparencia/" target="_blank"><img src="{{ asset('images/transparencia.png') }}" class="img-thumbnail m-1" style="max-width: 180px" alt="Portal da Transparência"></a>
                                    <a href="http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/issonline/iss.login.php" target="_blank"><img src="{{ asset('images/nota-fiscal.png') }}" class="img-thumbnail m-1" style="max-width: 180px" alt="Nota Fiscal Eletrônica"></a>
                                    <a href="{{route('licitacao')}}" target="_blank"><img src="{{ asset('images/licitacoes.png') }}" class="img-thumbnail m-1" style="max-width: 180px" alt="Licitações"></a>
                                    <a href="http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/websis/portal_transparencia/financeiro/contas_publicas/index.php?consulta=sic" target="_blank"><img src="{{ asset('images/sic.png') }}" class="img-thumbnail m-1" style="max-width: 180px" alt="Acesso à Informação"></a>
                                    <a href="https://email.uolhost.com.br/pedrodetoledo.sp.gov.br/" target="_blank"><img src="{{ asset('images/webmail.png') }}" class="img-thumbnail m-1" style="max-width: 180px" alt="Webmail"></a>
                                    <a href="{{ route('concursos') }}"><img src="{{ asset('images/concursos.jpg') }}" class="img-thumbnail m-1" style="max-width: 180px" alt="Concursos e Processos Seletivos"></a>
                                    <a href="https://legislativo.pedrodetoledo.sp.gov.br/pdf/Carta-de-Servicos-ao-Usuario.pdf" target="_blank"><img src="{{ asset('images/carta.jpg') }}" class="img-thumbnail m-1" style="max-width: 180px" alt="Carta de Serviços ao Usuário"></a>
                                    <a href="https://www.poupatempo.sp.gov.br/wps/portal/portalpoupatempo/servicos/intermediarias/carteira-vacina-covid19/!ut/p/z1/lZFNb4JAEIZ_Sw8cywwsIdjbGhSQlpXiB92LAUNXEmQNUkn_fTd6IkGq720nzzOZvAscUuB1dilF1payzir1_uL2LqQu-tMEGUbhFOOIJpv15wQdw4LtFYh81_QtDxljBDGeEBtJsEEV4E_5zmzuYhwsQjeaGabHrCd9b25Q5a9MknwsCXu3H_PxTuiD948AfHz9FvgVGWuwDwxU1AcGOvjvigVwUcn89uG0zokjgDfFd9EUjf7TqPGhbU_nNw017LpOF1KKqtD38qjhkHKQ5xbSPgmn41olxTJ45flv9_IH8rI7UA!!/dz/d5/L2dBISEvZ0FBIS9nQSEh/" target="_blank"><img src="{{ asset('images/cert-covid.jpg') }}" class="img-thumbnail m-1" style="max-width: 180px" alt="Webmail"></a></p>
                                </p>
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
                <div class="col">
                    <div class="card border-0">
                        <a href="{{ route('comunicado', $c->idComunicados) }}">
                            <img class="img-fluid img-thumbnail shadow p-0" src="{{ $c->file }}"  alt="{{ $c->com_titulo }}"/>
                        </a>

                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection

