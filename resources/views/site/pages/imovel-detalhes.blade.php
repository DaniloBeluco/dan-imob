@extends('site.layouts.app-detalhes')

@section('title', 'Danimob - '. $imovel['nome'] )

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-6" style="padding-left:0;">
            <img src="http://localhost/dan-imob/storage/app/imoveis/{{ $imovel["foto_url"] }}" width="100%" />
        </div>
        <div class="col-md-6">
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
                        <h4>Tubarão - SC</h4>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-md-12" style="margin-top:40px;">
            <div class="row text-center">
                <div class="col-md-3">

                </div>
                <div class="col-md-2">
                    1
                </div>
                <div class="col-md-2">
                    2
                </div>
                <div class="col-md-2">
                    3
                </div>
                <div class="col-md-3">

                </div>
            </div>

        </div>
    </div>

</div>



<div class="container-site" style="padding-top:50px;">
</div>


@endsection
