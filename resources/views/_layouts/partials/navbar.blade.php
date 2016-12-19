<nav class="nav">
          <div class="nav-left">
            <a class="nav-item is-brand" href="#">
              <p style="font-family: 'Yantramanav', sans-serif; font-size: 25px">FISCALIA
            </a>
          </div>

          <div class="nav-center">
            <a class="nav-item" href="https://github.com/sphinix27/book-records">
              <span class="icon">
                <i class="fa fa-github"></i>
              </span>
            </a>
            <a class="nav-item" href="https://twitter.com/fge_bolivia">
              <span class="icon">
                <i class="fa fa-twitter"></i>
              </span>
            </a>
            <a class="nav-item" href="https://www.facebook.com/FiscaliaGeneralBolivia/">
              <span class="icon">
                <i class="fa fa-facebook"></i>
              </span>
            </a>
          </div>

          <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>

          <div class="nav-right nav-menu">
            @if (Auth::guest())
              <a class="nav-item is-tab is-{{ active_class(if_uri('login')) }}" href="{{ url('/login') }}">Login</a>
              <a class="nav-item is-tab is-{{ active_class(if_uri('register')) }}" href="{{ url('/register') }}">Register</a>
            @else
              <a class="nav-item is-tab is-{{ active_class(if_uri('home')) }}" href="/home">
                Home
              </a>
              <a class="nav-item is-tab is-{{ active_class(if_uri('denouncers')) }}" href="/denouncers">
                Denouncers
              </a>
              <a class="nav-item is-tab is-{{ active_class(if_uri('denounceds')) }}" href="/denounceds">
                Denounceds
              </a>
              <a class="nav-item is-tab is-{{ active_class(if_uri('crimes')) }}" href="/crimes">
                Crimes
              </a>
              <a class="nav-item is-tab is-{{ active_class(if_uri('states')) }}" href="/states">
                States
              </a>
              <a class="nav-item is-tab is-{{ active_class(if_uri('records')) }}" href="/records">
                Records
              </a>
              <span class="nav-item">
                <form action="{{ url('/logout') }}" method="POST">
                  {{ csrf_field() }}
                  <button class="button is-primary"><i class="fa fa-sign-out"></i> Logout</button>                
                </form>
              </span>
            @endif
          </div>
        </nav>