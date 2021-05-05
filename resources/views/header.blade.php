<nav class="navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <img style="width: 15%;" src="{{url('images/it.png')}}">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('lecture')}}">Предметы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('teacher')}}">Учителя</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('group')}}">Группы</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->surname }} {{ Auth::user()->name }}<span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                        Выйти
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                        @csrf

                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>