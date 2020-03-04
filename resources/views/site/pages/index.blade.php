@extends('site.layouts.app')
@section('title', 'Danimob - Encontre seu imóvel ideal')


@section('content')


<div class="row text-center" style="margin-bottom: 60px;">
    <div class="col-md-12">
        <h2>Imóveis em destaque</h2>
    </div>
</div>
<div class="row">

    @foreach ($imoveis as $imovel)



    <div class="col-imovel">
    <a href="{{ route('site.imoveis@show', $imovel['id']) }}" style="text-decoration:none;">
            <div class="imovel-container">
                <div style="width: 100%; height:56%;">
                    <div class="imovel-foto"
                        style="background-image: url('http://localhost/dan-imob/storage/app/imoveis/{{ $imovel["foto_url"] }}')">
                        <div class="imovel-foto-text">
                            <h5>Ver Detalhes</h5>
                        </div>

                    </div>
                </div>
                <div class="imovel-desc">
                    <div class="desc-container">
                        <div class="row">
                            <div style="width: 100%;">
                                <p class="desc-title">{{ $imovel['nome'] }}</p>
                            </div>
                            <div style="width: 100%;">
                                <p class="desc-local" {{ $imovel['bairro'] }} - {{ $imovel['cidade'] }}/SC </p> </div>
                                    <div style="width: 100%;">
                                    <p class="desc-preco">R$ {{ $imovel['valor'] }} </p>
                                    <div class="desc-tipo">{{ $imovel['tipo'] }}</div>
                            </div>
                            <div style="width: 100%;">
                                <p class="icon-info" style="float: left;"><img
                                        src="{{ URL::asset('images/layout/icons/bed.png') }}" width="17"
                                        height="17" />{{ $imovel['dormitorios'] }} Dormitórios</p>
                                <div class="desc-negocio">{{ $imovel['negocio'] }}</div>
                            </div>
                            <div style="width: 100%;">
                                <p class="icon-info"><img src="{{ URL::asset('images/layout/icons/car.png') }}"
                                        width="17" height="17" />{{ $imovel['garagens'] }} Garagens</p>
                            </div>
                            <div style="width: 100%;">
                                <p class="icon-info"><img src="{{ URL::asset('images/layout/icons/size.png') }}"
                                        width="17" height="17" />{{ $imovel['tamanho'] }} m²</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>


    @endforeach

</div>



<div class="row text-center" style="margin-bottom: 60px;margin-top:60px;">
    <div class="col-md-12">
        <h2 class="h">Residenciais</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4 resid-col">
                <div class="residencial">
                    <div class="residencial-item"
                        style="background-image:url('http://localhost/dan-imob/storage/app/imoveis/residencial 1.jpg');">

                        <div class="residencial-desc">
                            <div class="residencial-title">
                                <h5 style=>Residence Infinity</h5>
                            </div>
                            <div class="residencial-text">
                                <p>
                                    Pensado nos mínimos detalhes, o Infinity Residence vai elevar o padrão de morar bem,
                                    com conforto, segurança e uma excelente infraestrutura. Amplos apartamentos, salas
                                    comerciais e uma sofisticada área de lazer, transformam este empreendimento em um
                                    sonho para quem busca uma vida mais alegre, divertida, tranquila, segura e
                                    aconchegante. Agora sua vida pode ser mais. Sua vida pode ser Infinity.
                                </p>
                            </div>
                            <div class="btn-ver-residencial">
                                <button class="btn btn-success">Saiba mais</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 resid-col">
                <div class="residencial">
                    <div class="residencial-item"
                        style="background-image:url('http://localhost/dan-imob/storage/app/imoveis/residencial 2.jpg');">

                        <div class="residencial-desc">
                            <div class="residencial-title">
                                <h5 style=>Residence Infinity</h5>
                            </div>
                            <div class="residencial-text">
                                <p>
                                    Pensado nos mínimos detalhes, o Infinity Residence vai elevar o padrão de morar bem,
                                    com conforto, segurança e uma excelente infraestrutura. Amplos apartamentos, salas
                                    comerciais e uma sofisticada área de lazer, transformam este empreendimento em um
                                    sonho para quem busca uma vida mais alegre, divertida, tranquila, segura e
                                    aconchegante. Agora sua vida pode ser mais. Sua vida pode ser Infinity.
                                </p>
                            </div>
                            <div class="btn-ver-residencial">
                                <button class="btn btn-success">Saiba mais</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 resid-col">
                <div class="residencial">
                    <div class="residencial-item"
                        style="background-image:url('http://localhost/dan-imob/storage/app/imoveis/residencial 3.jpg');">

                        <div class="residencial-desc">
                            <div class="residencial-title">
                                <h5 style=>Residence Infinity</h5>
                            </div>
                            <div class="residencial-text">
                                <p>
                                    Pensado nos mínimos detalhes, o Infinity Residence vai elevar o padrão de morar bem,
                                    com conforto, segurança e uma excelente infraestrutura. Amplos apartamentos, salas
                                    comerciais e uma sofisticada área de lazer, transformam este empreendimento em um
                                    sonho para quem busca uma vida mais alegre, divertida, tranquila, segura e
                                    aconchegante. Agora sua vida pode ser mais. Sua vida pode ser Infinity.
                                </p>
                            </div>
                            <div class="btn-ver-residencial">
                                <button class="btn btn-success">Saiba mais</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection




<!-- CSS -->
@push('styles')

<style>

</style>

@endpush
