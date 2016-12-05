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


                        {!! Form::label('start', 'Starting The') !!}
                        {!! Form::text('start', null,
                        ['class' => 'form-control',
                        'placeholder' => 'YYYY-mm-dd']) !!}

                        {!! Form::label('end', 'End The') !!}
                        {!! Form::text('end', null,
                        ['class' => 'form-control',
                        'placeholder' => 'YYYY-mm-dd']) !!}

                        {!! Form::label('place', 'The Adress') !!}
                        {!! Form::text('place', null,
                        ['class' => 'form-control',
                        'placeholder' => 'The Adress']) !!}

                        {!! Form::label('centent', 'Description') !!}
                        {!! Form::textarea('content', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Description']) !!}

                        {!! Form::label('price', 'The Price') !!}
                        {!! Form::text('price', null,
                        ['class' => 'form-control',
                        'placeholder' => 'The Price']) !!}


                        {!! Form::submit('Publier',
                        ['class' => 'btn btn-group-justified']) !!}

                        <hr>

                        <style>.btn-group-justified{background-color: lightsteelblue}</style>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection