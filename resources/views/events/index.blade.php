@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('errors.messages')
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Les Evenements dispo<h3></div>
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



