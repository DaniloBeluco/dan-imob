<nav style="box-shadow: 1px 1px 11px skyblue;" class="navbar navbar-expand-lg navbar-light bg-light">
    <a style="color: #6950d3; font-weight:bold;" class="navbar-brand" href="#">Painel de Controle</a>
    <ul class="nav navbar-nav ml-auto">
        <li style="border-left:1px solid #e3e6f0;padding-left:30px;">
            <div style="color:#878796;font-size:10pt;margin-right:10px;margin-top:10px;float:left;">
                {{ Auth::user()->name }}</div>

            <div class="dropdown" style="float:right;">
                <button class="btn btn-secondary dropdown-toggle btn-dropdown-image" type="button"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img style="z-index:100;" src=" {{ URL::asset('images/layout/icons/d.png') }}" width="30"
                        height="30" />
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </div>
            </div>

        </li>
    </ul>
</nav>
