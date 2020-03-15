@extends('site.layouts.app')
@section('title', 'Danimob - Encontre seu imóvel ideal')


@section('content')



<div class="row">
    <div class="col-md-12 col-filter">
        <div class="container-filter">
            <div class="pad">
                <form class="form" method="GET" action="{{route('site.imoveis-page')}}">
                    @csrf
                    <div class="row text-center">
                        <div class="col-md-2 filter">
                            <div class="filter-item">
                                <label>Negócio</label>
                                <select class="form-control" name="negocio">
                                    <option>Selecione</option>
                                    <option value="Venda">Venda</option>
                                    <option value="Aluguel">Aluguel</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 filter">
                            <div class="filter-item">
                                <label>Tipo do Imóvel</label>
                                <select class="form-control" name="tipo">
                                    <option>Selecione</option>
                                    <option value="Casa">Casa</option>
                                    <option value="Apartam.">Apartamento</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 filter">
                            <div class="filter-item">
                                <label>Valor mínimo</label>
                                <input type="text" class="form-control" name="valor-min" placeholder="R$ 0,00" />
                            </div>
                        </div>
                        <div class="col-md-2 filter">
                            <div class="filter-item">
                                <label>Valor máximo</label>
                                <input type="text" class="form-control" name="valor-max" placeholder="R$ 0,00" />
                            </div>
                        </div>
                        <div class="col-md-2 filter">
                            <div class="filter-item">
                                <label>Cidade</label>
                                <select class="form-control" name="cidade">
                                    <option>Selecione
                                    </option>
                                @foreach($cidades as $cidade)
                                <option value="{{ $cidade['id'] }}">{{ $cidade['nome'] }}</option>
                                @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 filter">
                            <div class="filter-item">
                                <label style="color:white;">.</label>
                                <input type="submit" value="Pesquisar" class="form-control btn btn-primary" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






<div class="row text-center" style="margin-bottom: 60px;">
    <div class="col-md-12">
        <h2>Imóveis em destaque</h2>
        <img src="{{ URL::asset('images/layout/icons/border-design.png') }}" width="250" />
    </div>
</div>
<div class="row">

    @foreach ($imoveis as $imovel)



    <div class="col-imovel" onmouseover="overimoveis(this)" onmouseout="outimoveis(this)">
        <a href="{{ route('site.imoveis@show', $imovel['id']) }}" style="text-decoration:none;">
            <div class="imovel-container">
                <div style="width: 100%; height:56%;">
                    <div class="imovel-foto"
                        style="background-image: url('http://localhost/dan-imob/storage/app/imoveis/{{ $imovel["foto_url"] }}')">
                        <div class="imovel-foto-text">
                            <h5>Ver Detalhes</h5>
                            <div class="linha-detalhes"></div>
                        </div>

                    </div>
                </div>
                <div class="imovel-desc">
                    <div class="desc-container">
                        <div class="row">
                            <div style="width: 100%;">
                                <p class="desc-title">{{ $imovel['nome'] }}</p>
                            </div>
                            <div style="width: 100%;margin-bottom:-4px;">
                                <p class="desc-local">{{ $imovel['cidade'] }}/SC</p>
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
        <img src="{{ URL::asset('images/layout/icons/border-design.png') }}" width="250" />
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
