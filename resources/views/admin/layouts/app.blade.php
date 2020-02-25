<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danimob - Painel de Controle</title>
    <link rel='icon' href="{{ URL::asset('images/layout/icons/d.png') }}" type='image/png' />
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

    <nav id="sidebar">
        <div class="sidebar-header text-center">
            <img src="{{ URL::asset('images/layout/icons/d.png') }}" width="60" height="60" />
            <h5 style="">ADMIN</h5>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/dashboard.png') }}"
                        width="12" height="12" />Dashboard</a>

            </li>
            <li>
                <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/home.png') }}" width="14"
                        height="14" />Imóveis</a>
            </li>
            <li>
                <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/add2.png') }}" width="12"
                        height="12" />Cadastrar Imóvel</a>
            </li>
            <li>
                <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/add2.png') }}" width="12"
                        height="12" />Páginas</a>

            </li>
            <li>
                <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/bag.png') }}" width="12"
                        height="12" />Portfolio</a>
            </li>
            <li>
                <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/mail.png') }}" width="12"
                        height="12" />Contato</a>
            </li>
            <li>
                <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/config.png') }}" width="14"
                        height="14" />Configurações</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">

        @yield('content')

    </div>

</body>

</html>
