@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Panel admin</div>
                    <div class="panel-body">

                            <h2>Bienvenue dans le panel admin</h2>


                        @foreach($posts as $post)
                            <a href="{{ route('post.show', $post->id)}}">
                                <h2>{{ $post->title }}</h2>
                            </a>
                            <p>{{ $post->content }}</p>

                            <hr>
                            <hr>


                        @endforeach

                        {{ $posts->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <class="container">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des évènements</div>
                    <div class="panel-body">

                        @foreach($events as $event)

                            <a href="{{ route('event.show', $event->id) }}">
                                <h6>{{ $event->title }}</h6>
                            </a>

                            <p>{{ $event->content }}
                        @endforeach

                        {{ $events->links() }}

                    </div>
                </div>
            </div>>
    </div>

@endsection