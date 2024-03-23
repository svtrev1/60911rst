
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-targer="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" aria-current="page" data-bs-toggle="dropdown" href={{url('sessions')}}>Сеансы</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url('sessionPages')}}">Все сеансы</a></li>
                            <li><a class="dropdown-item" href="{{url('session/create')}}">Добавить сеанс</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">...</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('services')}}" class="nav-link">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('clients')}}" class="nav-link">Клиенты</a>
                    </li>
                </ul>

                @if(Auth::user())

                    <ul class="navbar-nav">
                        <a href="#" class="nav-link active"><i class="fa fa-user" style="font-size: 20px; color: white;"></i>
                            <span> </span>{{ Auth::user()->name}}</a>
                        <a class="btn btn-outline-success my-2 my-sm-0" href="{{url('logout')}}">Выйти</a>
                    </ul>
                @endif     
            </div>
        </div>
    </nav>
</header>