@extends('layouts.app')

@section('content')<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $event->title }}</div>
                <div class="panel-body">

                    {{ $event->content }}

                    <br>
                    <br>
                    <strong>Auteur :</strong> {{ $event->user->name }}
                    <br>

                    @if(Auth::check() && Auth::user()->isAdmin)

                        <a class="btn btn-info" href="{{ route('event.edit', $event->id) }}">Modifier</a>

                        <br>

                        {!! Form::model($event, array(

                            'route' => array('event.destroy', $event->id),
                            'method' => 'DELETE'))
                             !!}


                        {!! Form::submit('Supprimer',
                        ['class' => 'btn btn-danger'])
                         !!}


                        {!! Form::close() !!}

                    @endif

                    <a href="{{ route('event.index') }}">Retour aux articles</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection