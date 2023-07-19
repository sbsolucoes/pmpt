<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #055e9a;" >
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" style="width: 50%" class="card-img-top" alt="..."></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        A Prefeitura
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

                        <li><a class="dropdown-item" href="{{ route('departamentos') }}">Departamentos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('concursos')}}">Concursos e Proc. Seletivos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Educação</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="{{ route('educacao') }}">Editais</a></li>
                        <li><a class="dropdown-item" href="{{ route('escolas') }}">Escolas</a></li>
                        <li><a class="dropdown-item" href="https://pedrodetoledo.sapescola.com.br/" target="_blank">SAPESCOLA</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Serviços
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/websis/siapegov/arrecadacao/baw/certidaoValorVenal.php">Certidão de Valor do Imóvel</a></li>
                        <li><a class="dropdown-item" href="http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/websis/siapegov/administrativo/gpro/protocolo_consulta.php">Consulta Protocolo</a></li>
                        <li><a class="dropdown-item" href="http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/websis/siapegov/arrecadacao/baw/veracidade_certidao.php">Consulta Veracidade de Certidão</a></li>
                        <li><a class="dropdown-item" href="http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/websis/siapegov/arrecadacao/iptu/iptu_consulta_pagamentos.php">Demostrativo de Pagamento de IPTU</a></li>
                        <li><a class="dropdown-item" href="http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/websis/siapegov/arrecadacao/baw/certidao.php?no_cpf=1">Emissão de Certidão de Débitos de Tributos Imobiliários e Mobiliários</a></li>
                        <li><a class="dropdown-item" href="http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/websis/siapegov/arrecadacao/baw/certidao.php?form=1&">Emissão de Certidão de Débitos de Tributos Imobiliários e Mobiliários com CPF</a></li>
                        <li><a class="dropdown-item" href="http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/websis/siapegov/arrecadacao/2via/index.php">Emissão de 2ª vias de Tributos e Taxas</a></li>
                        <li><a class="dropdown-item" href="http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/websis/siapegov/arrecadacao/itbi/itbi_login.php">Emissão de Guia de ITB</a></li>
                        <li><a class="dropdown-item" href="http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/websis/siapegov/recursos_humanos/grh/grh_rh_online.php">Folha de Pagamento Online</a></li>
                        <li><a class="dropdown-item" href="http://legislativo.pedrodetoledo.sp.gov.br/pdf/modelo-de-declaracao-de-bens-e-valores.doc">Declaração Anual de Bens - Editável (Utilizar Edge ou Firefox)</a></li>
                        <li><a class="dropdown-item" href="http://legislativo.pedrodetoledo.sp.gov.br/pdf/modelo-de-declaracao-de-bens-e-valores.pdf">Declaração Anual de Bens - PDF</a></li>
                        <li><a class="dropdown-item" href="https://legislativo.pedrodetoledo.sp.gov.br/pdf/requerimento-abonada.pdf" target="_blank">Requerimento Falta Abonada</a></li>
                        <li><a class="dropdown-item" href="https://legislativo.pedrodetoledo.sp.gov.br/pdf/autorizacao-retirada-cesta-basica.pdf" target="_blank">Autorização para retirada de Cesta Básica</a></li>
                    </ul>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Atos Oficiais
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="https://legislativo.pedrodetoledo.sp.gov.br/pdf/lei-organica-atualizada-2019.pdf" target="_blank">Lei Orgânica</a></li>
                        <li><a class="dropdown-item" href="{{ route('atos.key', 'leis') }}" alt="Leis">Leis</a></li>
                        <li><a class="dropdown-item" href="{{ route('atos.key', 'leis-complementares') }}" alt="Leis Complementares">Leis Complementares</a></li>
                        <li><a class="dropdown-item" href="{{ route('atos.key', 'decretos') }}" alt="Decretos">Decretos</a></li>
                        <li><a class="dropdown-item" href="{{ route('atos.key', 'portarias') }}" alt="Portarias">Portarias</a></li>
                        <li><a class="dropdown-item" href="{{ route('atos') }}" alt="Leis">Atos</a></li>
                    </ul>
                </li>

                <!--<li class="nav-item">
                    <a class="nav-link" href="{{ route('contato') }}">Contato</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.categories') }}">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('conselhos') }}">Conselhos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ouvidoria') }}">Ouvidoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://mailpro.uol.com.br/pedrodetoledo.sp.gov.br" target="_blank">Webmail</a>
                </li>
            </ul>



            <button class="btn btn-sm btn-info" id="click">Contraste</button>

            <!--
            <div class="form-check form-switch m-">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-circle-half" viewBox="0 0 20 16">
                    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                  </svg>
                <input class="form-check-input" type="checkbox" id="switch" name="theme">
                <label class="form-check-label" for="switch">Alto Contraste</label>
            </div>
            -->

            <div class="btn-container m-1" text-primary>
                <button name="increase-font" id="increase-font" title="Aumentar fonte" class="btn btn-sm btn-info" id="click">A +</button>
                <button name="decrease-font" id="decrease-font" title="Diminuir fonte" class="btn btn-sm btn-info" id="click">A -</button>
            </div>

        </div>
    </div>
</nav>
