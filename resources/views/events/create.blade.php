@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Afficher formulaire de publication de l'event</div>
                    <div class="panel-body">


                        {!! Form::open(array(
                        'route' => 'event.store',
                         'method' => 'POST')) !!}
                        {!! Form::label('title', 'Title') !!}
                        {!! Form::text('title', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Title']) !!}


                        {!! Form::label('content', 'Starting The') !!}
                        {!! Form::date('start', null,
                        ['class' => 'form-control',
                        'placeholder' => 'starting day']) !!}

                        {!! Form::label('end', 'End The') !!}
                        {!! Form::date('start', null,
                        ['class' => 'form-control',
                        'placeholder' => 'End The']) !!}

                        {!! Form::label('place', 'The Adress') !!}
                        {!! Form::textarea('content', null,
                        ['class' => 'form-control',
                        'placeholder' => 'The Adress']) !!}

                        {!! Form::label('price', 'The Price') !!}
                        {!! Form::textarea('content', null,
                        ['class' => 'form-control',
                        'placeholder' => 'The Price']) !!}


                        {!! Form::submit('Publier',
                        ['class' => 'btn btn-group-justified']) !!}

                        <style>.btn-group-justified{background-color: lightsteelblue}</style>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection