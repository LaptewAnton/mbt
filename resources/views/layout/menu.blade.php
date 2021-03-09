<div class="menu shadow">
    <div class="row mt-3">
        <div class="col-3 d-flex align-items-center">
            <h2 class="menu-page">@yield('title')</h2>
        </div>
        <div class="col-9 ml-auto">
            <ul class="d-flex align-items-center float-end">
                <li>
                    <a class="menu-item" href="{{route('home')}}">
                        Главная
                    </a>
                </li><li>
                    <a class="menu-item" href="{{route('applications')}}">
                        Заявки
                    </a>
                </li>
                @if(Auth::check() && Auth::user()->admin == 1)
                    <li>
                        <a class="menu-item" href="{{route('admin')}}">
                            Администрирование
                        </a>
                    </li>
                @endif
                @if(Auth::check() == 0)
                    <li>
                        <a class="menu-item" href="{{route('login')}}">
                            Авторизация
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('registration')}}">
                            Регистрация
                        </a>
                    </li>
                @else
                    <li>
                        <a class="menu-item" href="{{route('application.create-show')}}">
                            Создать заявку
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('profile')}}">
                            Мои заявки
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('logout')}}">
                            Выход
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
