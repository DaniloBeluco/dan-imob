

<nav id="sidebar">
    <div class="sidebar-header text-center">
        <img src="{{ URL::asset('images/layout/icons/d.png') }}" width="60" height="60" />
        <h5 style="">ADMIN</h5>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="{{ route('admin.dashboard') }}"><img class="icon-menu"
                    src="{{  URL::asset('images/layout/icons/dashboard.png') }}" width="12" height="12" />Dashboard</a>

        </li>
        <li style="background:#fff1;">
            <a href="{{ route('admin.imoveis') }}"><img class="icon-menu"
                    src="{{ URL::asset('images/layout/icons/home.png') }}" width="14" height="14" />Imóveis</a>
        </li>
        <li>
            <a href="{{ route('admin.cadastrar-imovel') }}"><img class="icon-menu"
                    src="{{ URL::asset('images/layout/icons/add2.png') }}" width="12" height="12" />Cadastrar Imóvel</a>
        </li>
        <li style="background:#fff1;">
            <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/add2.png') }}" width="12"
                    height="12" />Páginas</a>

        </li>
        <li class="">
            <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/bag.png') }}" width="12"
                    height="12" />Portfolio</a>
        </li>
        <li style="background:#fff1;">
            <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/mail.png') }}" width="12"
                    height="12" />Contato</a>
        </li>
        <li class="">
            <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/config.png') }}" width="14"
                    height="14" />Configurações</a>
        </li>
    </ul>
    <div class="container-fluid text-center">
        <div style="margin-left:auto;margin-right:auto;width: 50px;height:50px;border-radius:100px;background:#6d7fcc;">
            .</div>
    </div>
</nav>

