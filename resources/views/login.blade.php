@extends('layout.layout')

@section('title')
    Авторизация
@endsection

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-6">
            <form action="{{route('login')}}" method="post" class="form-auth shadow">
                <h3>Вход:</h3>
                <hr>
                @csrf
                <h4>Вход в личный кабинет</h4>
                <div>
                    <input class="" required maxlength="50" type="text" name="login" placeholder="Логин">
                </div>
                <div>
                    <input class="" required maxlength="50" type="password" name="password" placeholder="Пароль">
                </div>
                <div class="auth-btn">
                    <button type="submit" class="button">Войти</button>
                    <div>
                        <a class="" href="{{route('registration')}}">Зарегистрироватся</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
