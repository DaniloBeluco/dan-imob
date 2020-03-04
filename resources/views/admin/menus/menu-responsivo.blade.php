<nav id="sidebar">
    <div class="sidebar-header text-center">
        <img class="icon-d-menu" src="{{ URL::asset('images/layout/icons/d.png') }}" width="60" height="60" />
        <h5 style=""><span class="menu-admin">ADMIN</span></h5>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="{{ route('admin.dashboard') }}"><img class="icon-menu"
                    src="{{  URL::asset('images/layout/icons/dashboard.png') }}" width="12" height="12" /><span
                    class="menu-admin">Dashboard</span></a>

        </li>
        <li style="background:#fff1;">
            <a href="{{ route('admin.imoveis') }}"><img class="icon-menu"
                    src="{{ URL::asset('images/layout/icons/home.png') }}" width="14" height="14" /><span
                    class="menu-admin">Imóveis</span></a>
        </li>
        <li>
            <a href="{{ route('admin.cadastrar-imovel') }}"><img class="icon-menu"
                    src="{{ URL::asset('images/layout/icons/add2.png') }}" width="12" height="12" /><span
                    class="menu-admin">Cadastrar Imóvel</span></a>
        </li>
        <li style="background:#fff1;">
            <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/testimonial.png') }}" width="12"
                    height="12" /><span class="menu-admin">Páginas</span></a>

        </li>
        <li class="">
            <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/bag.png') }}" width="12"
                    height="12" /><span class="menu-admin">Portfolio</span></a>
        </li>
        <li style="background:#fff1;">
            <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/mail.png') }}" width="12"
                    height="12" /><span class="menu-admin">Contato</span></a>
        </li>
        <li class="">
            <a href="#"><img class="icon-menu" src="{{ URL::asset('images/layout/icons/config.png') }}" width="14"
                    height="14" /><span class="menu-admin">Configurações</span></a>
        </li>
    </ul>
    <div class="text-center">
        <div class="circle-image-menu" onclick="fecharMenuAdmin()">
            <img class="seta-menu" src="{{ URL::asset('images/layout/icons/back.png') }}" width="20"/></div>
    </div>
</nav>
