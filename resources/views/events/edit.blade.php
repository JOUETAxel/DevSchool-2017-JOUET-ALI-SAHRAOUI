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
                          $event,
                          array(
                        'route' => array('event.update', $event->id),
                        'method' => 'PUT'))
                          !!}

                        {!! Form::label('title', 'Titre') !!}
                        {!! Form::text('title', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Titre']) !!}


                        {!! Form::label('content', 'starting day') !!}
                        {!! Form::date('start', null,
                        ['class' => 'form-control',
                        'placeholder' => 'starting day']) !!}

                        {!! Form::label('end', 'end') !!}
                        {!! Form::date('start', null,
                        ['class' => 'form-control',
                        'placeholder' => 'end']) !!}

                        {!! Form::label('place', 'adress') !!}
                        {!! Form::textarea('content', null,
                        ['class' => 'form-control',
                        'placeholder' => 'adress']) !!}

                        {!! Form::label('price', 'price') !!}
                        {!! Form::textarea('content', null,
                        ['class' => 'form-control',
                        'placeholder' => 'price']) !!}


                        {!! Form::submit('Publier',
                        ['class' => 'btn btn-group-justified']) !!}
                        <style>.btn btn-group-justified{background-color: lightgray}</style>

                        {!! Form::close() !!}

                        $table->increments('id');
                        $table->string('title');
                        $table->date('start');
                        $table->date('end');
                        $table->string('place');
                        $table->integer('price');
                        $table->mediumText('content');
                        $table->integer('user_id')->foreign('user_id')->references('id')->on('users');
                        $table->timestamps();
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection