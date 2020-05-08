<!--
  header-->
<nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}">
                Covid-19
            </a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="{{ route('index') }}" >Inicio</a>             
                </li>
                 <li class="dropdown">
                    <a class="dropdown-toggle" href="{{ route('abaut') }}" >Quiénes Somos</a>             
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="{{ route('contact') }}" >Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end header -->