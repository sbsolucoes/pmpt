<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #055e9a;" >
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" style="width: 40%" class="card-img-top" alt="..."></a>
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
                        <li><a class="dropdown-item" href="" target="_blank">História</a></li>
                        <li><a class="dropdown-item" href="">Departamentos</a></li>                        
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Educação
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="{{ route('escolas') }}">Escolas</a></li>
                        <li><a class="dropdown-item" href="">Legislação</a></li>
                        <li><a class="dropdown-item" href="https://pedrodetoledo.sapescola.com.br/" target="_blank">SAPESCOLA</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Serviços
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="http://191.19.252.59/pmpedrotoledo/websis/siapegov/arrecadacao/baw/certidaoValorVenal.php">Certidão de Valor do Imóvel</a></li>
                        <li><a class="dropdown-item" href="">Consulta Protocolo</a></li>
                        <li><a class="dropdown-item" href="">Consulta Veracidade de Certidão</a></li>
                        <li><a class="dropdown-item" href="">Demostrativo de Pagamento de IPTU</a></li>
                        <li><a class="dropdown-item" href="">Emissão de Certidão de Débitos de Tributos Imobiliários e Mobiliários</a></li>
                        <li><a class="dropdown-item" href="">Emissão de Certidão de Débitos de Tributos Imobiliários e Mobiliários</a></li>
                        <li><a class="dropdown-item" href="">Emissão de 2ª vias de Tributos e Taxas</a></li>
                        <li><a class="dropdown-item" href="">Emissão de Guia de ITB</a></li>
                        <li><a class="dropdown-item" href="">Folha de Pagamento Online</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Transparência
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="http://189.57.94.114:8081/portal-transparencia/rh/estrutura-remuneratoria" target="_blank" alt="Estrutura Remuneratória">Estrutura Remuneratória</a></li>
                        <li><a class="dropdown-item" href="http://189.57.94.114:8081/portal-transparencia/rh/servidores/ativos" target="_blank" alt="Servidores Ativos">Servidores Ativos</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item"  href="http://191.19.252.59/portal-transparencia/" target="_blank" alt="Portal da TransparÊncia">Portal da Transparência</a>
                            <ul>
                                <li><a class="dropdown-item" href="http://189.57.94.114:8081/portal-transparencia/licitacoes/licitacoes" target="_blank" alt="Licitações">Licitações</a></li>
                                <li><a class="dropdown-item" href="http://189.57.94.114/portal-transparencia/licitacoes/contratos" target="_blank" alt="Contratos">Contratos</a></li>
                                <li><a class="dropdown-item" href="http://189.57.94.114:8081/portal-transparencia/execucao/adiantamentos" target="_blank" alt="Adiantamento">Adiantamento</a></li>
                                <li><a class="dropdown-item" href="http://189.57.94.114:8081/portal-transparencia/home" target="_blank" alt="Mais Informações">Mais Informações</a></li>
                            </ul>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="http://191.19.252.59/pmpedrotoledo/websis/portal_transparencia/financeiro/contas_publicas/index.php?consulta=sic" target="_blank" alt="Acesso a Informação">Acesso a Informação</a></li>
                        <li><a class="dropdown-item" href="https://pedrodetoledo.sp.gov.br/ouvidoria" target="_blank" alt="Ouvidoria">Ouvidoria</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Atos Oficiais
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="{{ route('leis') }}" alt="Leis">Leis</a></li>
                        <li><a class="dropdown-item" href="{{ route('lc') }}" alt="Leis Complementares">Leis Complementares</a></li>
                        <li><a class="dropdown-item" href="{{ route('decretos') }}" alt="Decretos">Decretos</a></li>
                        <li><a class="dropdown-item" href="{{ route('portarias') }}" alt="Portarias">Portarias</a></li>
                        <li><a class="dropdown-item" href="{{ route('atos') }}" alt="Leis">Atos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Licitações
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="{{ route('licitacao') }}" target="_blank">Pregão</a></li>
                        <li><a class="dropdown-item" href="">Departamentos</a></li>                        
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Storage::url('documentos/pdf/lei-organica-atualizada-2019.pdf') }}" target="_blank">Lei Orgânica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://mailpro.uol.com.br/pedrodetoledo.sp.gov.br" target="_blank">Webmail</a>
                </li>

            </ul>
            

            <div class="form-check form-switch m-">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-circle-half" viewBox="0 0 20 16">
                    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                  </svg> 
                <input class="form-check-input" type="checkbox" id="switch" name="theme">                
                <label class="form-check-label" for="switch">Alto Contraste</label>                
            </div>
            
            <div class="btn-container m-1" text-primary>
                <button name="increase-font" id="increase-font" title="Aumentar fonte">A +</button>
                <button name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>
            </div>

        </div>
    </div>
</nav>
