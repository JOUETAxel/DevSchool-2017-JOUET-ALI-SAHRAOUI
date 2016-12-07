@extends('layouts.app')
@section('content')<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{ $user->name }}</h3></div>
                <div class="panel-body">

                    @if (Auth::id() == $user->id)

                        {!! Form::model(
                         $user,
                         array(
                       'route' => array('user.update', $user->id),
                       'method' => 'PUT'))
                         !!}

                        {!! Form::label('name', 'Nom') !!}
                        {!! Form::text('name', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Nom']) !!}

                        {!! Form::label('email', 'E-mail') !!}
                        {!! Form::text('email', null,
                        ['class' => 'form-control',
                        'placeholder' => 'E-mail']) !!}

                        {!! Form::label('password', 'Mot de passe') !!}
                        {!! Form::textarea('password', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Mot de passe']) !!}


                        {!! Form::submit('Publier',
                        ['class' => 'btn btn-group-justified']) !!}

                        <style>.btn-group-justified{background-color: lightsteelblue}</style>

                    @endif

                    <a href="{{ route('post.index') }}">Retour aux articles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
