@extends('layout.layout')

@section('title')
    Главная
@endsection

@section('logo')
    <div class="logo">
        <h1>Сделаем лучше вместе</h1>
    </div>
@endsection

@section('content')
    @include('components.applications')
@endsection
