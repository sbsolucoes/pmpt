<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Prefeitura Municipal de Pedro de Toledo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">


</head>

<body>

@include('includes.header')

@yield('content')

@include('includes.footer')

<!--Vlibras-->
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="{{ asset('js/scripts.js') }}"></script>
<!--ZOOM-->
<script type="text/javascript">
    window.onload = function() {
        var elementBody = document.querySelector('body');
        var elementBtnIncreaseFont = document.getElementById('increase-font');
        var elementBtnDecreaseFont = document.getElementById('decrease-font');
        // Padrão de tamanho, equivale a 100% do valor definido no Body
        var fontSize = 100;
        // Valor de incremento ou decremento, equivale a 10% do valor do Body
        var increaseDecrease = 10;

        // Evento de click para aumentar a fonte
        elementBtnIncreaseFont.addEventListener('click', function(event) {
            fontSize = fontSize + increaseDecrease;
            elementBody.style.fontSize = fontSize + '%';
        });

        // Evento de click para diminuir a fonte
        elementBtnDecreaseFont.addEventListener('click', function(event) {
            fontSize = fontSize - increaseDecrease;
            elementBody.style.fontSize = fontSize + '%';
        });
    }
</script>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>

</body>

</html>
