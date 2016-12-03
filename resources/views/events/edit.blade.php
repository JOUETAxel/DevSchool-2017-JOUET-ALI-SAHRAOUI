@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Afficher le formulaire de d'edition de l'event</div>
                    <div class="panel-body">
                        Afficher le formulaire de d'edition de l'event

                        {!! Form::model(
                          $post,
                          array(
                        'route' => array('event.update', $post->id),
                        'method' => 'PUT'))
                          !!}

                        {!! Form::label('title', 'Titre') !!}
                        {!! Form::text('title', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Titre']) !!}

                        {!! Form::label('content', 'Contenu') !!}
                        {!! Form::textarea('content', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Contenu']) !!}


                        {!! Form::submit('Publier',
                        ['class' => 'btn btn-info']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection