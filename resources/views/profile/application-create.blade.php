@extends('layout.layout')

@section('title')
    Создание заявки
@endsection
@section('content')
    <div class="container">

        <form action="{{route('application.create')}}" enctype="multipart/form-data" method="post"
              class="form mt-3">
            <h4>Добавить заявку</h4>
            <hr>
            @csrf
            <div>
                <input type="text" maxlength="45" name="title" required placeholder="Название">
            </div>
            <div>
                <select class="form-select" name="category_id" id="category" required>
                    <option disabled selected>Выберите категорю</option>
                    @if($categories)
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div>
            <textarea rows="5" maxlength="1000" name="description"
                      required placeholder="Опишите проблему"></textarea>
            </div>
            <div>
                <input class="form-control" type="file" name="photo_before" required placeholder="Фото">
            </div>
            <button type="submit" class="button">Добавить заявку</button>
        </form>
    </div>
@endsection
