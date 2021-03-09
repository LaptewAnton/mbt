@extends('layout.layout')

@section('title')
    Регистрация
@endsection

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-6">
            <form action="{{route('registration')}}" method="post" class="form-auth shadow">
                <h3>Зарегистрируйтесь</h3>
                <hr>
                @csrf
                <h4>Регистрация в портале</h4>
                <div>
                    <input maxlength="60" type="text" name="name" required placeholder="ФИО">
                </div>
                <div>
                    <input maxlength="50" type="email" name="email" required placeholder="Эл. почта">
                </div>
                <div>
                    <input maxlength="50" type="text" name="login" required placeholder="Логин">
                </div>
                <div>
                    <input maxlength="50" type="password" name="password" required placeholder="Пароль">
                </div>
                <div>
                    <input maxlength="50" type="password" name="password_repeat" required
                           placeholder="Подтвердите пароль">
                </div>
                <div class="auth-checkbox">
                    <input value="1" class="form-check-inline" type="checkbox" name="check" required>
                    <label for="check">Согласие на обработку персональных данных:</label>
                </div>
                <div class="auth-btn">
                    <button class="button" type="submit">Зарегистрироватся</button>
                    <p>Уже есть аккаунт? <a href="{{route('login')}}">Войти</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
