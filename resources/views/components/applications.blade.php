<section class="cards row justify-content-around">
    @foreach($applications as $application)
        <div class="card_item status_{{$application->status_id}} col-6">
            <div class="card_item-img">
                <a href="{{route('application.show', $application->id)}}">
                    <img class="xyz" src="/img/{{$application->photo_after}}" data-alt-src="/img/{{$application->photo_before}}">
                </a>
            </div>
            <div class="card_item-title">
                <span>{{$application->title}}</span>
            </div>
            <div class="card_item-about">
                <span class="status">{{$application->status->name}} | </span>
                <span>{{$application->category->name}}</span>
            </div>
        </div>
    @endforeach
</section>
