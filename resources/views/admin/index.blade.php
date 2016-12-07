@extends('layouts.app')

@section('content')
    @include('errors.messages')
    <div class="container">
                <table class="table table-striped table-bordered text-center">

                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">User</th>
                        <th class="text-center">Date of creation</th>
                        <th class="text-center">Manage</th>
                    </tr>
                    @foreach($posts as $post)

                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ $post->created_at->format('y-m-d') }}</td>
                            <td id="flex">
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="{{ route('post.show', $post->id) }}" class="btn-info btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                                {!! Form::model($posts, array('route' => ['admin.post.destroy', $post->id], 'method' => 'DELETE')) !!}
                                {{ Form::button('<i class="fa fa-trash-o"></i>', array('class'=>'btn btn-danger btn-xs', 'type'=>'submit')) }}
                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @endforeach

                </table>
        <div class="text-center"> {{ $posts->links() }}</div>

        <div class="container">
            <table class="table table-striped table-bordered text-center">

                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">User</th>
                    <th class="text-center">Date of creation</th>
                    <th class="text-center">Manage</th>
                </tr>
                @foreach($events as $event)

                    <tr>
                        <td>{{ $event->user_id }}</td>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->user->name }}</td>
                        <td>{{ $event->created_at->format('y-m-d') }}</td>
                        <td id="flex">
                            <a href="{{ route('event.edit', $event->id) }}" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="{{ route('event.show', $event->id) }}" class="btn-info btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                            {!! Form::model($events, array('route' => ['admin.event.destroy', $event->id], 'method' => 'DELETE')) !!}
                            {{ Form::button('<i class="fa fa-trash-o"></i>', array('class'=>'btn btn-danger btn-xs', 'type'=>'submit')) }}
                            {!! Form::close() !!}
                        </td>

                    </tr>
                @endforeach

            </table>
            <div class="text-center"> {{ $events->links() }}</div>
@endsection