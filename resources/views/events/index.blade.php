@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des évènements</div>
                    <div class="panel-body">
                        Afficher la liste des evenements

                        @foreach($posts as $post)
                            <a href="{{ route('event.show', $post->id) }}">
                                <h2>{{ $post->title }}</h2>
                            </a>
                            <p>{{ $post->content }}</p>
                        @endforeach

                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')

