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
    <title>@yield('title')</title>
    @stack('styles')

</head>

<body>

    <div class="container-fluid header" style="background-image: url({{ URL::asset('images/layout/bg.jpg') }})">
        <div class="row header-row-1" style="">
            <div class="col-md-3">
                <h1><img src="{{ URL::asset('images/layout/logo-teste.png') }}" /></h1>
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
                                <a style="text-decoration:none;" href="#">
                                    <li>Contato</li>
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

        <div class="row">
            <div class="col-md-12">
                <div class="container-filter">
                    <div class="pad">
                        <form class="form" method="POST">
                            <div class="row text-center">
                                <div class="col-md-2 filter">
                                    <div class="filter-item">
                                        <label>Negócio</label>
                                        <select class="form-control" name="negocio">
                                            <option>Selecione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 filter">
                                    <div class="filter-item">
                                        <label>Tipo do Imóvel</label>
                                        <select class="form-control" name="tipo">
                                            <option>Selecione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 filter">
                                    <div class="filter-item">
                                        <label>Valor mínimo</label>
                                        <input type="text" class="form-control" name="valor-min"
                                            placeholder="R$ 0,00" />
                                    </div>
                                </div>
                                <div class="col-md-2 filter">
                                    <div class="filter-item">
                                        <label>Valor máximo</label>
                                        <input type="text" class="form-control" name="valor-max"
                                            placeholder="R$ 0,00" />
                                    </div>
                                </div>
                                <div class="col-md-2 filter">
                                    <div class="filter-item">
                                        <label>Cidade</label>
                                        <select class="form-control" name="cidade">
                                            <option>Selecione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 filter">
                                    <div class="filter-item">
                                        <label style="color:white;">.</label>
                                        <input type="submit" value="Pesquisar" class="form-control btn btn-primary"
                                            name="cidade" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-site" style="padding-top:100px;">

        <!-- Carrega o conteúdo da página -->

        @yield('content')

    </div>



    <!-- Carrega o Footer -->

    @include('site.layouts.footer')


</body>

</html>
