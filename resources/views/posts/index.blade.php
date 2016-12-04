@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des articles</div>
                    <div class="panel-body">

                        @foreach($posts as $post)

                            <a href="{{ route('post.show', $post->id) }}">
                                <h2>{{ $post->title }}</h2>
                            </a>

                            <p>{{ $post->content }}</p>

                            <hr>
                            <hr>
                        
                            <style>hr{border-color:#9B9B9B;}</style>

                        @endforeach

                        {{ $posts->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


