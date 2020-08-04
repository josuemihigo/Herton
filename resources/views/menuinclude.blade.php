<nav class="navbar navbar-expand-xl fixed-top hk-navbar bg-white navbar-scroll">

    <a href="{{ url('/home') }}" class="navbar-brand d-flex align-items-center" href="#">
        <img class="brand-img d-inline-block align-top mr-10" src="dist/img/logo.png" alt="PiBas" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedColor1"
        aria-controls="navbarSupportedColor1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedColor1">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="{{ url('/home') }}" class="navbar-brand font-weight-700">Pibasacademia</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('#apropos') }}" class="nav-link">Apropos</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/blog') }}" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/blog#gallerie') }}" class="nav-link">Gallerie</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/faq') }}" class="nav-link">Faq</a>
            </li>

        </ul>

        <ul class="navbar-nav align-items-center flex-row">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/home') }}"><i class="zmdi zmdi-account font-18"> Connexion</i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="font-22 zmdi zmdi-notifications"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link d-flex align-items-center dropdown-toggle no-caret" href="#" id="userAuthdrpColor1"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="font-12 text-capitalize ml-10">Pbas<i class="zmdi zmdi-chevron-down pl-5"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userAuthdrpColor1">
                    <a class="dropdown-item" href="{{ url('/faq') }}">Aide</a>
                    <a class="dropdown-item" href="{{ url('/apropos') }}">Apropos</a>
                    <a class="dropdown-item" href="{{ url('/faq') }}">Faq</a>
                    <a class="dropdown-item" href="{{ url('/blog') }}">blogs</a>


                </div>
            </li>
        </ul>
    </div>
</nav>