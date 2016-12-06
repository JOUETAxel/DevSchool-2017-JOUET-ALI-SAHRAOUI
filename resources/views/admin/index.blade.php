@extends('layouts.app')

@section('content')

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
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o"></i></a>

                                
                            </td>

                        </tr>
                    @endforeach

                </table>
        <div class="text-center">{{ $posts->links() }}</div>
        </div>



@endsection

