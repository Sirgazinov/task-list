<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Task List</font></font></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Переключить навигацию">
          <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
       <ul class="navbar-nav mr-auto">
         <!-- Authentication Links -->
          @if (Auth::guest())
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/login') }}">Login</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/register') }}">Register</a>
              </li>
          @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
              </li>
          @endif

       </ul>
    </div>
  </nav>
</div>
