@extends('site.layouts.app-detalhes')

@section('title', 'Danimob - Imóveis')

@section('content')


<div class="row text-center" style="margin-bottom: 60px;margin-top: 60px;">
    <div class="col-md-12">
        <h2>Encontre seu imóvel agora</h2>
        <img src="{{ URL::asset('images/layout/icons/border-design.png') }}" width="250" />
    </div>
</div>

<div class="row text-center">
    <div class="col-md-3 text-left" style="">
        <div class="filtros-content" style="">
            <div style="margin-left:20px;margin-top:30px;">
                <div style="height:1px;width:90%;background:#e5e5e5;"></div>
                <h5 style="font-family:Arial;color:#6667c1;margin-top: 20px;margin-bottom: 14px;"><strong>Geral</strong>
                </h5>

                <form method="GET" class="form">
                    <h5 class="mont-serrat">Dormitórios</h5>
                    @csrf
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="dormitorios" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">1+</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="dormitorios" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">2+</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="dormitorios" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">3+</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="dormitorios" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">4+</label>
                    </div>


                    <h5 class="mont-serrat" style="margin-top:20px;">Sendo Suítes</h5>
                    @csrf
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="banheiros" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">1+</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="banheiros" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">2+</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="banheiros" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">3+</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="banheiros" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">4+</label>
                    </div>


                    <h5 class="mont-serrat" style="margin-top:20px;">Vagas Garagem</h5>
                    @csrf
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="garagens" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">1+</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="garagens" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">2+</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="garagens" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">3+</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="garagens" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">4+</label>
                    </div>


                    <div class="form-group" style="margin-top:20px;">
                        <div style="height:1px;width:90%;background:#e5e5e5;"></div>

                        <h5 style="font-family:Arial;color:#6667c1;margin-top: 20px;margin-bottom: 14px;">
                            <strong>Preço</strong></h5>


                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="valor-min" placeholder="Mínimo" class="form-control" />
                            </div>
                            <div class="col-md-6" style="margin-left:-23px;">
                                <input type="text" name="valor-max" placeholder="Máximo" class="form-control" />
                            </div>
                        </div>
                    </div>


                    <div class="form-group" style="margin-top:20px;">
                        <div style="height:1px;width:90%;background:#e5e5e5;"></div>
                        <h5 style="font-family:Arial;color:#6667c1;margin-top: 20px;margin-bottom: 14px;">
                            <strong>Cidades</strong></h5>

                        @foreach ($cidades as $cidade)

                        <div class="custom-control custom-radio margin-radio">
                            <input type="radio" id="customRadio1" name="cidade" class="custom-control-input"
                                value="{{ $cidade['id'] }}" />
                            <label class="custom-control-label" for="customRadio1">{{ $cidade['nome'] }}</label>
                        </div>

                        @endforeach
                        <!--  <div class="custom-control custom-radio margin-radio">
                            <input type="radio" id="customRadio2" name="cidade" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Florianópolis</label>
                        </div>
                        <div class="custom-control custom-radio margin-radio">
                            <input type="radio" id="customRadio3" name="cidade" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3">Criciúma</label>
                        </div>
                        <div class="custom-control custom-radio margin-radio">
                            <input type="radio" id="customRadio4" name="cidade" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4">Araranguá</label>
                        </div>  -->
                    </div>


                    <div class="form-group" style="margin-top:20px;">
                        <div style="height:1px;width:90%;background:#e5e5e5;"></div>
                        <h5 style="font-family:Arial;color:#6667c1;margin-top: 20px;margin-bottom: 14px;">
                            <strong>Negócio</strong></h5>
                        <div class="row">
                            <div class="custom-control custom-radio margin-radio col-md-4" style="margin-left: 15px;">
                                <input type="radio" id="customRadio6" name="negocio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio6" value="Aluguel">Aluguel</label>
                            </div>
                            <div class="custom-control custom-radio margin-radio col-md-6"">
                                <input type=" radio" id="customRadio7" name="negocio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio7" value="Venda">Venda</label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group" style="margin-top:20px;">
                        <div style="height:1px;width:90%;background:#e5e5e5;"></div>

                        <h5 style="font-family:Arial;color:#6667c1;margin-top: 20px;margin-bottom: 14px;">
                            <strong>Tamanho em m²</strong></h5>


                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="preco-minimo" placeholder="Mínimo" class="form-control" />
                            </div>
                            <div class="col-md-6" style="margin-left:-23px;">
                                <input type="text" name="preco-maximo" placeholder="Máximo" class="form-control" />
                            </div>
                        </div>
                    </div>


                    <div class="form-group" style="margin-top:20px;">
                        <div style="height:1px;width:90%;background:#e5e5e5;"></div>
                        <h5 style="font-family:Arial;color:#6667c1;margin-top: 20px;margin-bottom: 14px;">
                            <strong>Negócio</strong></h5>
                        <div class="row">
                            <div class="custom-control custom-radio margin-radio col-md-4" style="margin-left: 15px;">
                                <input type="radio" id="customRadio8" name="tipo" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio8" value="Casa">Casa</label>
                            </div>
                            <div class="custom-control custom-radio margin-radio col-md-6"">
                                <input type=" radio" id="customRadio9" name="tipo" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio9" value="Apartam.">Apartamento</label>
                            </div>
                        </div>
                    </div>

                    <input type="submit" value="Filtrar" class="btn btn-success" style="float:left;" />
                <a href="{{ route('site.imoveis-page') }}" class="btn btn-primary" style="margin-left:10px;">Resetar</a><br/><br/>

                </form>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="row">
            @foreach ($imoveis as $imovel)

            <div class="col-imovel-page" onmouseover="overimoveis(this)" onmouseout="outimoveis(this)">
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
                                        <p class="desc-local" {{ $imovel['bairro'] }} - {{ $imovel['cidade'] }}/SC </p>
                                            </div> <div style="width: 100%;">
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
    </div>
</div>

@endsection
