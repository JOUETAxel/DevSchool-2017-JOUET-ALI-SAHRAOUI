@extends('layouts.app')

@section('content')<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->title }}</div>
                <div class="panel-body">

                    {{ $post->content }}

                    <br>
                    <br>
                    <strong>Auteur :</strong> {{ $post->user->name }}
                    <br>

                    @if(Auth::check() && Auth::user()->isAdmin)

                        <a class="btn btn-info" href="{{ route('event.edit', $post->id) }}">Modifier</a>

                        <br>

                        {!! Form::model($post, array(

                            'route' => array('event.destroy', $post->id),
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