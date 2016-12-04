@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des évènements</div>
                    <div class="panel-body">
                        Afficher la liste des evenements

                        @foreach($events as $event)
                            <a href="{{ route('event.show', $event->id) }}">
                                <h2>{{ $event->title }}</h2>
                            </a>
                            <p>{{ $event->content }}</p>
                        @endforeach
                        {{ $events->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



