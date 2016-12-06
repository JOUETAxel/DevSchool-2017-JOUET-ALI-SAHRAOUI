@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><center>Liste des articles</center></div>
                    <div class="panel-body">
                        @foreach($posts as $post)
                            <a href="{{ route('post.show', $post->id)}}">
                                <h2>{{ $post->title }}</h2>
                            </a>
                            <p>{{ $post->content }}</p>

                            <div class="btn-group btn-group-justified">
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Modifier</a>
                            </div>
                                <br>
                                {!! Form::model($post, array(

                            'route' => array('post.destroy', $post->id),
                            'method' => 'DELETE'))
                             !!}


                                {!! Form::submit('Supprimer',
                                ['class' => 'btn btn-danger'])
                                 !!}


                                {!! Form::close() !!}


                            <hr>
                            <hr>


                            <style>hr{border-color:#9B9B9B;}</style>



                        @endforeach

                        {{ $posts->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><center>Liste des évènements</center></div>
                    <div class="panel-body">

                        @foreach($events as $event)

                            <a href="{{ route('event.show', $event->id) }}">
                                <h2>{{ $event->title }}</h2>
                                <h4>Date : {{$event->start}} to {{$event->end}} at {{$event->place}}</h4>
                                <h3>Price: {{$event->price}} $</h3>
                            </a>

                            <p>{{ $event->content }}</p>

                            <hr>
                            <hr>

                            <style>hr{border-color:#9B9B9B;}</style>

                        @endforeach

                        {{ $events->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection