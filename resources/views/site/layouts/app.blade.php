<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel='icon' href="{{ URL::asset('images/layout/icons/d.png') }}" type='image/png' />
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>

    <title>@yield('title')</title>
    @stack('styles')

</head>


<body style="background-image:url({{ URL::asset('images/layout/bg-gold.jpg') }});">
    <div class="body-container">
        <div class="container-fluid header" style="background-image: url({{ URL::asset('images/layout/bg.jpg') }})">
            <div class="row header-row-1" style="">
                <div class="col-md-3">
                    <h1><img src="{{ URL::asset('images/layout/dimb-white.png') }}" /></h1>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-11 right-row-1">
                            <div class="header-social-icon"><a href="#"><img
                                        src="{{ URL::asset('images/layout/icons/facebook.png') }}" width="16"
                                        height="16"></a></div>
                            <div class="header-social-icon"><a href="#"><img
                                        src="{{ URL::asset('images/layout/icons/instagram.png') }}" width="16"
                                        height="16"></a></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 right-row-2">
                            <div class="navbar">
                                <ul>
                                    <a style="text-decoration:none;" href="#">
                                        <li>Início</li>
                                    </a>
                                    <a style="text-decoration:none;" href="{{ route('site.imoveis-page') }}">
                                        <li>Imóveis</li>
                                    <a style="text-decoration:none;" href="#">
                                        <li>Contato</li>
                                    </a>

                                    </a>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="header-row-2" style="">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2>Temos o imóvel ideal para você</h2>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="box">
                            <p>atendimento@hotmail.com</p>
                        </div>
                        <div class="box">
                            <p>+55 (48) 98855-4375</p>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <div class="container-site" style="padding-top:0px;">

            <!-- Carrega o conteúdo da página -->

            @yield('content')

        </div>



        <!-- Carrega o Footer -->

        @include('site.layouts.footer')

    </div>
</body>


</html>
