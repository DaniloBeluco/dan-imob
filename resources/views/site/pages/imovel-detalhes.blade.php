@extends('site.layouts.app-detalhes')

@section('title', 'Danimob - '. $imovel['nome'] )

@section('content')

<div class="container-fluid">

    <div class="row" style="">
        <div class="col-md-6" style="padding-left:0;padding-right:0;">
            <img src="http://localhost/dan-imob/storage/app/imoveis/{{ $imovel["foto_url"] }}" width="100%" />
        </div>
        <div class="col-md-6"
            style="padding-left:0;padding-right:0;background-image:url('{{ URL::asset('images/layout/border-gold.png') }}');background-size: 100% 100%;background-repeat: no-repeat;">
            <div style="width:100%; height:100%;">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="det-title">
                            <img src="{{URL::asset('images/layout/coroa.png') }}" width="150" height="">
                            <h1>{{ $imovel['nome'] }}</h1>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="det-local-title">
                            <h4>{{ $imovel['cidade'] }} - SC</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-top:25px;">
        <div class="row">
            <div class="col-md-6">
                <div class="det-price ">
                    <h5 style="color:gray;margin-left:14px;">Por apenas</h5>
                    <h1>R${{ $imovel['valor'] }},00<span> / {{ $imovel['negocio'] }}</span></h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-btn-fav">
                    <button class="btn"><img src="{{ URL::asset('images/layout/icons/heart.png') }}" width="14"
                            style="margin-top:-4px;" /> Adicionar aos Favoritos</button>
                </div>

            </div>
        </div>
    </div>



    <div class="row" style="background:#c69e57;padding-bottom:38px;margin-top:20px;">
        <div class="col-md-12" style="margin-top:40px;">
            <div class="row text-center">
                <div class="col-md-3">

                </div>

                <div class="col-md-2">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <img src="{{ URL::asset('images/layout/icons/sleep-white.png') }}" width="42" />
                        </div>
                        <div class="col-md-12">
                            <h4 class="det-icon-desc">{{ $imovel['dormitorios'] }} dormitório(s)</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <img src="{{ URL::asset('images/layout/icons/bathroom-white.png') }}" width="42" />
                        </div>
                        <div class="col-md-12">
                            <h4 class="det-icon-desc">{{ $imovel['banheiros'] }} banheiro(s)</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <img src="{{ URL::asset('images/layout/icons/car-white.png') }}" width="42" />
                        </div>
                        <div class="col-md-12">
                            <h4 class="det-icon-desc">{{ $imovel['garagens'] }} garagens(s)</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>

        </div>
    </div>

    <div class="row" style="margin-top:40px;">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
            <div
                style="width:80%;height:2px;background:linear-gradient(16deg, #c69e57, white, #c69e57);margin-left:auto;margin-right:auto;margin-bottom:15px; ">
            </div>
            <h2>{{ $imovel['descricao'] }}</h2>
            <img src="{{ URL::asset('images/layout/icons/border-design.png') }}" width="250" style="margin-top:10px;">
        </div>
    </div>


    <div class="row" style="margin-top:80px;height:480px;">
        <div class="col-md-3">
            <img src="{{ URL::asset('images/layout/icons/local.png') }}" width="300">
        </div>
        <div class="col-md-5 text-center"
            style="background:#54c0eb;border-radius:60px;height:300px;box-shadow: 0px 0px 80px #e5e5e5;">
            <div class="local-container">


                <h3 style="font-weight:bold;color:white">
                    {{ $imovel['cidade'] }}
                    <span style="font-weight:100">
                        /Santa Catarina
                    </span>
                </h3>
                <div
                    style="width:80%;height:2px;background:linear-gradient(16deg, white, transparent, white);margin-left:auto;margin-right:auto;margin-bottom:15px; ">
                </div>
                <h5 style="color:white;font-weight:bold;">Bairro: <span
                        style="font-weight:100;">{{ $imovel['bairro'] }}</span></h5>
                <h5 style="color:white;font-weight:bold;">Rua: <span
                        style="font-weight:100;">{{ $imovel['rua'] }}</span></h5>
                <h5 style="color:white;font-weight:bold;">CEP: <span
                        style="font-weight:100;">{{ $imovel['cep'] }}</span></h5>
                <div
                    style="width:40%;height:1px;background:linear-gradient(16deg, #54c0eb, white, #54c0eb);margin-left:auto;margin-right:auto;margin-bottom:15px;">
                    <br/>
                        <h6 style="color:white;margin-top:-10px;">{{ $imovel['complemento'] }}</h6>

                </div>

            </div>
        </div>
    </div>

</div>



<div class="container-site" style="padding-top:50px;">
</div>


@endsection
