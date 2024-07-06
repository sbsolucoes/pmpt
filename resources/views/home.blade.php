@extends('master.master')

@section('content')

    <div class="container-fluid">
        <div class="row float-left">
            <div class="col-md-8 mt-5">
                <div class="col">
                    <div class="row g-5">
                        <div class="form-group">
                            <p><h1>Comunicado</h1></p>
                            <br>
                            <p> <h2>Em cumprimento à Lei Eleitoral n° 9.504/1997, informamos que a veiculação de notícias no portal institucional da Câmara Municipal de Pedro de Toledo, bem como as atividades em nossas redes sociais, ficam suspensas a partir das 23h59 desta sexta-feira (05/07).</h2></p>
                        </div>
                        
                        @foreach ($noticias as $n)
                            <div class="col-sm-4">
                                <div class="card border-0">
                                    <img src="{{ $n->url_file }}" class="card-img-top" alt="{{ $n->post_title }}" style="width: 100%; height: 287px">

                                    <div class="card-body text-center" style="padding: 0;">
                                        <p class="card-title fw-bolder text-uppercase">{{ $n->post_title }}</p>
                                        <a href="{{ route('noticias', ['categoria_slug' => $n->categoria->slug, 'publicacao_slug' => $n->post_name ]) }}" class="btn btn-primary">Mais Informações</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

                <div class="col-md-4 float-right">
                    <div class="row mt-5">
                        <h4 style="background-color: #e3f2fd; width: 100%; padding: 5px;font-size: 20px; color: #000000; border-radius: 5px">
                            Busca
                        </h4>
                        <nav class="navbar navbar-light bg-light">

                            <div class="container-fluid mt-2 text-dark">

                                <!--Busca-->

                                <a class="navbar-brand"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg> Pesquisar Atos e Propositurasss</a>
                                    <form class="d-flex" method="GET" action="{{ route('atos') }}">
                                        @csrf
                                        <input class="form-control me-2" type="text" name="nome"
                                            placeholder="Digite a pesquisa" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                                    </form>

                            </div>

                        </nav>
                    </div>

                    <div class="col text-left">
                        <div class="row">
                            <div class="container-fluid mt-2 text-dark">
                                <!--Links Úteis-->
                                <hr class="mt-2 mb-2">
                                <h4 style="background-color: #e3f2fd;width: 100%;padding: 5px;border-radius: 5px;font-size: 21px;">Acesso Rápido</h4>
                                <p>
                                    @foreach(config('toledo.links') as $key => $item)
                                    <a href="{{ $item['link'] ?? route($item['route']) }}{{ $item['get'] ?? '' }}" target="_blank">
                                        <img src="{{ asset($item['src']) }}" class="img-thumbnail m-1" style="max-width: 180px" alt="{{ $item['description'] }}">
                                    </a>
                                    @endforeach
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
        <div class="row mt-2">
            @foreach ($comunicados as $comunicado)
                <div class="col">
                    <div class="card border-0">
                        <a href="{{ route('comunicado', $comunicado->idComunicados) }}">
                            <img class="img-fluid img-thumbnail shadow p-0" src="{{ $comunicado->file }}"  alt="{{ $comunicado->com_titulo }}" style="width: 100%; height: 350px"/>
                        </a>

                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection

