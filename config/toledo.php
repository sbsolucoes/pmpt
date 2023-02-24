<?php

return [

    'licitacao' => [
        "1" => "Carta Convite",
        "2" => "Chamada Pública",
        "3" => "Concorrência Pública",
        "4" => "Leilão",
        "5" => "Pregão Eletrônico",
        "6" => "Pregão Presencial",
        "7" => "Tomada de Preços",
        "8" => "Aviso de dispensa presencial"
    ],

    'links' => [
        [
            "link" => "http://pmpedrotoledo.geosiap.net.br/portal-transparencia/",
            "src" => "images/transparencia.png",
            "description" => "Portal da Transparência"
        ],
        [
            "link" => "https://leismunicipais.com.br/legislacao-municipal/5155/leis-de-pedro-de-toledo",
            "src" => "images/leis-municipais.jpg",
            "description" => "Leis Municipais"
        ],
        [
            "link" => "http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/issonline/iss.login.php",
            "src" => "images/nota-fiscal.png",
            "description" => "Nota Fiscal Eletrônica"
        ],
        [
            "route" => 'licitacao',
            "src" => "images/licitacoes.png",
            "description" => "Licitações"
        ],
        [
            "link" => "http://pmpedrotoledo.geosiap.net.br/pmpedrotoledo/websis/portal_transparencia/financeiro/contas_publicas/index.php?consulta=sic",
            "src" => "images/sic.png",
            "description" => "Acesso à informação"
        ],
        [
            "link" => "https://email.uolhost.com.br/pedrodetoledo.sp.gov.br/",
            "src" => "images/webmail.png",
            "description" => "Acesso à informação"
        ],
        [
            "route" => 'concursos',
            "src" => "images/concursos.jpg",
            "description" => "Concursos e Processo Seletivos"
        ],
        [
            "link" => "https://legislativo.pedrodetoledo.sp.gov.br/pdf/Carta-de-Servicos-ao-Usuario.pdf",
            "src" => "images/carta.jpg",
            "description" => "Carta de Serviços ao Usuário"
        ],
        [
            "link" => "https://www.poupatempo.sp.gov.br/wps/portal/portalpoupatempo/servicos/intermediarias/carteira-vacina-covid19/!ut/p/z1/lZFNb4JAEIZ_Sw8cywwsIdjbGhSQlpXiB92LAUNXEmQNUkn_fTd6IkGq720nzzOZvAscUuB1dilF1payzir1_uL2LqQu-tMEGUbhFOOIJpv15wQdw4LtFYh81_QtDxljBDGeEBtJsEEV4E_5zmzuYhwsQjeaGabHrCd9b25Q5a9MknwsCXu3H_PxTuiD948AfHz9FvgVGWuwDwxU1AcGOvjvigVwUcn89uG0zokjgDfFd9EUjf7TqPGhbU_nNw017LpOF1KKqtD38qjhkHKQ5xbSPgmn41olxTJ45flv9_IH8rI7UA!!/dz/d5/L2dBISEvZ0FBIS9nQSEh/",
            "src" => "images/cert-covid.jpg",
            "description" => "Covid 19"
        ],
        [
            "route" => "licitacao",
            "get" => "?tipoLic=8",
            "src" => "images/aviso-dispensa-licitacao.jpeg",
            "description" => "Aviso de Dispensa Licitação"
        ],

    ]

];
