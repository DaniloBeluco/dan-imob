<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danimob - @yield('title')</title>
    <link rel='icon' href="{{ URL::asset('images/layout/icons/d.png') }}" type='image/png' />
    @stack('menu-style')

    <link rel="stylesheet" href="{{ URL::asset('css/imoveis.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/admin-responsivo.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/cadastrar-imovel.css') }}" />
    <link rel="stylesheet" type="text/css" href="css/montserrat-font.css">

    <link rel="stylesheet" type="text/css"
        href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{ URL::asset('js/admin.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

<body stle="width:100%;">

    @include('admin.menus.menu-responsivo')

    @include('admin.menus.menu-topo')

    <div class="row text-center" style="margin-top:20px;float:left;">
        <div class="col-md-12 page-title">
                @yield('title')

        </div>
    </div>




    <div class="container-admin" style="width:99%;">

        @yield('content')

    </div>

</body>

</html>
