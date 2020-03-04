@extends('admin.layouts.app')

@section('title', 'Cadastrar Imóvel')

@section('content')

<div class="row" style="margin-top:26px;">
    <div class="col-md-10">
    </div>
    <div class="col-md-2"><a href="{{ route('admin.imoveis') }}">
        <button class="btn btn-success">Ver Imóveis</button></a></div>
</div>
<div class="form-v10-content" style="margin-top:15px;margin-left:7px;">
    <form class="form-detail" action="{{ route('admin.imoveis@store') }}" method="post" id="myform"
        enctype="multipart/form-data">
        @csrf
        <div class="form-left">
            <h2>Detalhes</h2>
            <div class="form-row">
                <input type="text" name="nome" id="first_name" class="input-text" placeholder="Nome do Imóvel" required>
                <span class="select-btn">
                    <i class="zmdi zmdi-chevron-down"></i>
                </span>
            </div>
            <div class="form-group">
                <div class="form-row form-row-1">
                    <select name="tipo">
                        <option value="N.I">Tipo</option>
                        <option value="Casa">Casa</option>
                        <option value="Apartam.">Apartam.</option>
                    </select>
                </div>
                <div class="form-row form-row-2">
                    <select name="negocio">
                        <option value="N.I">Negócio</option>
                        <option value="Venda">Venda</option>
                        <option value="Aluguel">Aluguel</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row form-row-3">
                    <input type="text" name="tamanho" class="company" id="company" placeholder="Tamanho do Imóvel em m²"
                        required>
                </div>
                <div class="form-row form-row-4">
                    <select name="banheiros">
                        <option value="0">Banheiros</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4+</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row form-row-1">
                    <select name="dormitorios">
                        <option value="0">Dormitórios</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4+</option>
                    </select>
                </div>
                <div class="form-row form-row-2">
                    <select name="garagens">
                        <option value="0">Garagens</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4+</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <input type="text" name="descricao" class="company" id="company" placeholder="Descrição" required>
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
                        <option value="1">Tubarão</option>
                        <option value="2">Florianópolis</option>
                        <option value="3">Criciúma</option>
                        <option value="4">Araranguá</option>
                    </select>
                    <!--<span class="select-btn">
                        <i class="zmdi zmdi-chevron-down"></i>
                    </span>-->
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 0;">

                <div class="form-row form-row-1">
                    <input type="text" name="bairro" class="street" id="street" placeholder="Bairro" required>
                </div>

                <div class="form-row form-row-2">
                    <input type="text" name="cep" class="street" id="street" placeholder="CEP" required>
                </div>


            </div>


            <div class="form-row">
                <input type="text" name="rua" class="street" id="street" placeholder="Rua" required>
            </div>
            <div class="form-row">
                <input type="text" name="complemento" class="additional" id="additional"
                    placeholder="Informações Adicionais" required>
            </div>
            <div class="form-group" style="margin-bottom:0;">
                <div class="form-row form-row-1">
                    <input type="text" name="valor" class="business" id="business" placeholder="Valor em R$" required>
                </div>
                <div class="form-row form-row-2">
                    <input type="file" class="file-control" name="foto" placeholder="Foto">
                </div>
            </div>
            <div class="form-row-last">
                <input type="submit" name="register" class="register" value="Cadastrar Imóvel">
            </div>
        </div>
    </form>
</div>


@endsection
