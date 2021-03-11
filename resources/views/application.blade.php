@extends('layout.layout')

@section('title')
    Заявка №{{$application->id}}
@endsection

@section('content')
    <div class="app shadow">
        <div class="app-img">
            <img class="app" src="/img/{{$application->photo_before}}" data-alt-src="/img/{{$application->photo_after}}" alt="{{$application->photo_before}}">
        </div>
        <div class="app_about">
            <div class="app_about-title">
                <h2>{{$application->title}}</h2>
                <span>{{$application->status->name}} | </span><span>{{$application->created_at}}</span>
                @if(Auth::check() == 1 && Auth::user()->id == $application->user_id && $application->status_id == 1)
                    <a href="{{route('application.delete', $application->id)}}" class="button">Удалить</a>
                @endif
            </div>
            <div class="app-description">
                <div class="app-category">
                    <p class="app-description-title">Категория:</p>
                    <p>{{$application->category->name}}</p>
                </div>
                <p class="app-description-title">Описание заявки:</p>
                <p>{{$application->description}}</p>
                @if($application->comment != null)
                    <p class="app-description-title">Ответ администратора:</p>
                    <p>{{$application->comment}}</p>
                @endif
            </div>
        </div>
    </div>
    @if($application->status_id == 1)
        @if(Auth::check() && Auth::user()->admin == 1)
            <div class="app shadow">
                <div class="app-img">

                </div>
                <form action="{{route('application.update', $application->id)}}" enctype="multipart/form-data" method="post" class="app_about mt-3">
                    @csrf
                    <select name="status" id="status" class="form-select">
                        <option value="" disabled>Выберите статус заявки</option>
                        @foreach($statuses as $status)
                            @if($status->id != 1)
                                <option value="{{$status->id}}">{{$status->name}}</option>
                            @endif
                        @endforeach
                    </select>
                    <textarea class="callback callback_3" placeholder="Комментарий администратора" maxlength="500" name="comment" id="" cols="30"
                              rows="6"></textarea>
                    <input class="callback callback_2" type="file" class="form-control" name="photo_after">
                    <button type="submit" class="button">Отправить</button>
                </form>
            </div>
        @endif
    @endif
@endsection
