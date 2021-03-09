@extends('layout.layout')

@section('title')
    Заявки
@endsection

@section('content')
    @include('components.filter')
    @include('components.applications')
@endsection
