@extends('layout.layout')

@section('title')
    Панель администрирования
@endsection

@section('content')
    <div class="mt-3 mb-3">
        <div class="btn-group">
            <button type="button"  id="applicationsBtn" class="button">Заявки</button>
            <button type="button" id="categoriesBtn" class="button">Категории</button>
            <button type="button" id="categoriesCreate" class="button create" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Создать категорию</button>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="staticBackdropLabel">Создать новую категорию</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('category.create')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" maxlength="60" required placeholder="Название">
                        </div>
                        <button type="submit" class="button">Создать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table id="applicationsTable" class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Категория</th>
            <th scope="col">Статус</th>
            <th scope="col">Редактировать</th>
        </tr>
        </thead>
        <tbody>
        @foreach($applications as $application)
        <tr>
            <th scope="row">
            <td class="app-name app-overflow">{{$application->title}}</td>
            <td>{{$application->category->name}}</td>
            <td>{{$application->status->name}}</td>
            <td><a href="{{route('application.show', $application->id)}}">Редактировать</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <table id="categoriesTable" class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td><a href="{{route('category.update_show', $category->id)}}">Редактировать</a></td>
                <td><a href="{{route('category.delete', $category->id)}}">Удалить</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
