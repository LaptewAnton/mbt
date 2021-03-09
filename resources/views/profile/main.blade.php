@extends('layout.layout')

@section('title')
    Мои заявки
@endsection

@section('content')
    @include('components.filter')
    @include('components.applications')
@endsection
