@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')

<div class="painel-content">
    <div class="row" style="margin-top:12px;">
        <div class="col-md-9">
        </div>
        <div class="col-md-3"><a href="{{ route('admin.cadastrar-imovel') }}"><button class="btn btn-success">Cadastrar
                    Novo Imóvel</button></a></div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-xl-3">
            <div class="dash-item" style="border-left:4px solid skyblue;">
                <div class="row" style="margin-top:14px;">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="dash-item-title">IMÓVEIS CADASTRADOS</span>
                            </div>
                        </div>
                        <div class="row" style="margin-top:-4px;">
                            <div class="col-md-12">
                                <span style="color: #107daa;" class="dash-item-value">58 imóveis</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ URL::asset('images/layout/icons/home-dash.png') }}" width="46" height="46" />
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xl-3">
            <div class="dash-item" style="border-left:4px solid #1cc88a;">
                <div class="row" style="margin-top:14px;">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <span style="color:#1cc88a;" class="dash-item-title">IMÓVEIS ALUGADOS</span>
                            </div>
                        </div>
                        <div class="row" style="margin-top:-4px;">
                            <div class="col-md-12">
                                <span class="dash-item-value">24 imóveis</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ URL::asset('images/layout/icons/economic-dash.png') }}" width="46" height="46" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="dash-item" style="border-left:4px solid #36b9cc;">
                <div class="row" style="margin-top:14px;">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="dash-item-title">IMÓVEIS CADASTRADOS</span>
                            </div>
                        </div>
                        <div class="row" style="margin-top:-4px;">
                            <div class="col-md-12">
                                <span style="color: #107daa;" class="dash-item-value">58 imóveis</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ URL::asset('images/layout/icons/home-dash.png') }}" width="46" height="46" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="dash-item" style="border-left:4px solid #f6c23e;">
                <div class="row" style="margin-top:14px;">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <span style="color:#1cc88a;" class="dash-item-title">IMÓVEIS ALUGADOS</span>
                            </div>
                        </div>
                        <div class="row" style="margin-top:-4px;">
                            <div class="col-md-12">
                                <span class="dash-item-value">24 imóveis</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ URL::asset('images/layout/icons/economic-dash.png') }}" width="46" height="46" />
                    </div>
                </div>
            </div>
        </div>
    </div>





    @endsection
