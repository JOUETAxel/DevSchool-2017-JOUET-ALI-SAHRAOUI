@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->title }}</div>
                <div class="panel-body">
                    @include('errors.messages')
                    {{ $post->content }}

                    <br>
                    <br>
                    <strong>Auteur :</strong> {{ $post->user->name }}
                    <strong>Date de création :</strong> {{ $post->created_at }}
                    <br>
                        <a class="btn btn-primary btn-group-justified" href="{{ route('admin.post.show', $post->id) }}">Modifier</a>

                        <br>

                        {!! Form::model($post, array(

                            'route' => array('post.destroy', $post->id),
                            'method' => 'DELETE'))
                             !!}


                        {!! Form::submit('Supprimer',
                        ['class' => 'btn btn-danger btn-group-justified'])
                         !!}


                        {!! Form::close() !!}



                    <a href="{{ route('post.index') }}">Retour aux articles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
