@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Tous les Posts</h3></div>
                    <div class="panel-body">
                        Afficher le formulaire de d'edition de l'arcticle

                        {!! Form::model(
                          $post,
                          array(
                        'route' => array('post.update', $post->id),
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
                        ['class' => 'btn btn-group-justified']) !!}

                        <style>.btn-group-justified{background-color: lightsteelblue}</style>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection