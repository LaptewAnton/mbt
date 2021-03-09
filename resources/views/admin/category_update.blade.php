@extends('layout.layout')

@section('title')
    Редактирование категории
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{route('category.update', $category->id)}}" method="post">
                @csrf
                <div class="mb-3">
                    <input maxlength="60" value="{{$category->name}}" type="text" name="name" required placeholder="Название категории">
                </div>
                <button type="submit" class="button">Отредактировать</button>
            </form>
        </div>
    </div>
@endsection
