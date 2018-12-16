<nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
        <span class="navbar-toggler-icon leftmenutrigger"></span>
        <a class="navbar-brand" href="/">{{config('app.name', '')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav animate side-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
       
          </ul>
          <ul class="navbar-nav ml-md-auto d-md-flex">
            
            @guest
            <li class="nav-item">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">register</a>
            </li>
            @else
            <div class="dropleft">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
              Welcome!  {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>
                  <a class="dropdown-item" href="/">Home</a>
                </li>
                @if(Auth::user()->role == 'admin')
                <li>
                    <a class="dropdown-item" href="/book/create">Add Book</a>
                  </li>
                  <!--<li>
                      <a class="dropdown-item" href="/publisher/create">Add Publisher</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/genre/create">Add genre</a>
                      </li>-->
                @elseif(Auth::user()->role == 'customer')
                <li>
                    <a class="dropdown-item" href="/user/reservations">List all reserved books</a>
                  </li>
                  <li>
                      <a class="dropdown-item" href="/user/details">Personal Details</a>
                    </li>

                @endif

                <li>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </li>
              </div>
                @endif

          </ul>
        </div>
      </nav>