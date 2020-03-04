@extends('admin.layouts.app')

@section('title', 'Editar Imóvel')

@section('content')


<div class="form-v10-content" style="margin-top:15px;margin-left:7px;">
    <form class="form-detail" action="{{ route('admin.imoveis@storeEdit') }}" method="post" id="myform"
        enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-left">
            <h2>Detalhes</h2>
            <div class="form-row">
                <input type="hidden" name="id" value="{{ $imoveis['id'] }}">
                <input type="text" name="nome" id="first_name" class="input-text" placeholder="Nome do Imóvel"
                    value="{{ $imoveis['nome'] }}" required>
                <span class="select-btn">
                    <i class="zmdi zmdi-chevron-down"></i>
                </span>
            </div>
            <div class="form-group">
                <div class="form-row form-row-1">
                    <select name="tipo">
                        <option @if($imoveis['tipo']=="N.I" ) selected="selected" @endif value="N.I">Tipo
                        </option>
                        <option @if($imoveis['tipo']=="Casa" ) selected="selected" @endif value="Casa">Casa</option>
                        <option @if($imoveis['tipo']=="Apartam." ) selected="selected" @endif value="Apartamento">
                            Apartam.</option>
                    </select>
                </div>
                <div class="form-row form-row-2">
                    <select name="negocio">
                        <option @if($imoveis['negocio']=="N.I" ) selected="selected" @endif value="N.I">Negócio</option>
                        <option @if($imoveis['negocio']=="Venda" ) selected="selected" @endif value="Venda">Venda
                        </option>
                        <option @if($imoveis['negocio']=="Aluguel" ) selected="selected" @endif value="Aluguel">Aluguel
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row form-row-3">
                    <input type="text" name="tamanho" class="company" id="company" placeholder="Tamanho do Imóvel em m²"
                        value="{{ $imoveis['tamanho'] }}" required>
                </div>
                <div class="form-row form-row-4">
                    <select name="banheiros">
                        <option @if($imoveis['banheiros']=="0" ) selected="selected" @endif value="0">Banheiros</option>
                        <option @if($imoveis['banheiros']=="1" ) selected="selected" @endif value="1">1</option>
                        <option @if($imoveis['banheiros']=="2" ) selected="selected" @endif value="2">2</option>
                        <option @if($imoveis['banheiros']=="3" ) selected="selected" @endif value="3">3</option>
                        <option @if($imoveis['banheiros']=="4" ) selected="selected" @endif value="4+">4+</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row form-row-1">
                    <select name="dormitorios">
                        <option @if($imoveis['dormitorios']=="0" ) selected="selected" @endif value="0">Dormitórios
                        </option>
                        <option @if($imoveis['dormitorios']=="1" ) selected="selected" @endif value="1">1</option>
                        <option @if($imoveis['dormitorios']=="2" ) selected="selected" @endif value="2">2</option>
                        <option @if($imoveis['dormitorios']=="3" ) selected="selected" @endif value="3">3</option>
                        <option @if($imoveis['dormitorios']=="4" ) selected="selected" @endif value="3">4+</option>
                    </select>
                </div>
                <div class="form-row form-row-2">
                    <select name="garagens">
                        <option @if($imoveis['garagens']=="0" ) selected="selected" @endif value="0">Garagens</option>
                        <option @if($imoveis['garagens']=="1" ) selected="selected" @endif value="1">1</option>
                        <option @if($imoveis['garagens']=="2" ) selected="selected" @endif value="2">2</option>
                        <option @if($imoveis['garagens']=="3" ) selected="selected" @endif value="3">3</option>
                        <option @if($imoveis['garagens']=="4" ) selected="selected" @endif value="3">4+</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <input type="text" name="descricao" class="company" id="company" placeholder="Descrição"
                    value="{{ $imoveis['descricao'] }}" required>
            </div>
        </div>



        <div class="form-right">
            <h2>Localização e Preço</h2>

            <div class="form-group" style="margin-bottom: 0;">
                <div class="form-row form-row-1">
                    <select name="estado">
                        <option>SC</option>
                        <option>PR</option>
                        <option>RS</option>
                        <option>SP</option>
                    </select>
                </div>
                <div class="form-row form-row-2">
                    <select name="cidade">
                        @foreach ($cidades as $cid)
                    <option value="{{ $cid['id'] }}">{{ $cid['nome'] }}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 0;">

                <div class="form-row form-row-1">
                    <input type="text" name="bairro" class="street" id="street" placeholder="Bairro"
                        value="{{ $imoveis['bairro'] }}" required>
                </div>

                <div class="form-row form-row-2">
                    <input type="text" name="cep" class="street" id="street" placeholder="CEP"
                        value="{{ $imoveis['cep'] }}" required>
                </div>


            </div>


            <div class="form-row">
                <input type="text" name="rua" class="street" id="street" placeholder="Rua" value="{{ $imoveis['rua'] }}"
                    required>
            </div>
            <div class="form-row">
                <input type="text" name="complemento" class="additional" id="additional"
                    placeholder="Complemento" value="{{ $imoveis['complemento'] }}" required>
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <div class="form-row form-row-1">
                    <input type="text" name="valor" class="business" id="business" placeholder="Valor em R$"
                        value="{{ $imoveis['valor'] }}" required>
                </div>
                <div class="form-row form-row-2">
                    <input type="file" class="file-control" name="foto" placeholder="Foto">
                </div>
            </div>
            <div class="form-row-last">
                <input type="submit" name="register" class="register" value="Editar Imóvel">
            </div>
        </div>
    </form>
</div>


@endsection
