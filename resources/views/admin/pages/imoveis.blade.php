@extends('admin.layouts.app')
@section('title', 'Imóveis')

@section('content')

<div class="painel-content">
    <div class="row" style="margin-top:12px;">
        <div class="col-md-9">
        </div>
        <div class="col-md-3"><a href="{{ route('admin.cadastrar-imovel') }}"><button class="btn btn-success">Cadastrar
                    Novo</button></a></div>
    </div>
    <div class="row" style="margin-top: 30px;">

        @foreach($imoveis as $imovel)

        <div class="col-imovel">
            <div class="imovel-container">
                <!-- <div class="imovel-foto">
                    <img src="{{ URL::asset('images/imoveis/house.jpg') }}" width="100%" height="100%" />
                </div> -->
                <div class="imovel-desc col-lat">
                    <div class="desc-container">

                        <div class="row" style="">

                            <div class="col-md-6">

                                <div class="row heig">
                                    <p class="desc-title">{{ $imovel['nome']  }}</p>
                                </div>
                                <div class="row heig">
                                    <p class="desc-local">{{ $imovel['bairro']  }} - {{ $imovel['cidade']  }}/SC</p>
                                </div>
                                <div class="row heig">
                                    <p class="desc-preco">R$ {{ $imovel['valor']  }} </p>
                                </div>
                                <div class="row heig" style="margin-bottom: 20px !important;">
                                    <div class="com-md-6">
                                        <div class="desc-tipo">{{ $imovel['tipo']  }}</div>
                                    </div>
                                    <div class="com-md-6" style="margin-left: 15px;">
                                        <div class="desc-negocio">{{ $imovel['negocio']  }}</div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-md-6 col-md-baixo">

                                <div class="row heig">
                                    <p class="icon-info"><img src="{{ URL::asset('images/layout/icons/bed.png') }}"
                                            width="15" height="15" />{{ $imovel['dormitorios'] }} Dormitórios</p>
                                </div>
                                <div class="row heig">
                                    <p class="icon-info"><img src="{{ URL::asset('images/layout/icons/car.png') }}"
                                            width="15" height="15" />{{ $imovel['garagens'] }} Garagens</p>
                                </div>
                                <div class="row heig">
                                    <p class="icon-info"><img src="{{ URL::asset('images/layout/icons/bathroom.png') }}"
                                            width="15" height="15" />{{ $imovel['banheiros'] }} Banheiros</p>
                                </div>
                                <div class="row heig">
                                    <p class="icon-info"><img src="{{ URL::asset('images/layout/icons/size.png') }}"
                                            width="15" height="15" />{{ $imovel['tamanho']  }}</p>
                                </div>

                            </div>
                        </div>

                        <div class="row" style="width:105%;">
                            <a href="{{ route('admin.imoveis@edit', $imovel->id) }}" class="editar"
                                style="width:50%;float:left; background:#00800069;text-align: center;padding-bottom:2px;color:white;cursor:pointer;">
                                Editar</a>
                            <a href="{{ route('admin.imoveis@delete', $imovel->id) }}" class="excluir"
                                style="width:50%; background:#ff000087;text-align: center;padding-bottom:2px;color:white;cursor:pointer;">
                                Excluir</a>
                        </div>

                        <div class="row" style="width:105%;">
                            <a href="{{ route('admin.imoveis@edit', $imovel->id) }}" class="editar"
                                style="width:100%;float:left; background:#ffa500cf;text-align: center;padding-bottom:2px;color:white;cursor:pointer;margin-top:10px;">
                                Ver detalhes</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @endforeach

    </div>

    <div class="row text-center">

        <div class="col-md-2" style="margin-right: auto;margin-left:auto;">
            <!-- Paginação -->
            {!! $imoveis->links() !!}
        </div>

    </div>

</div>


@endsection
