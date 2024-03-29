@extends('Layouts.main.app')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>

<!-- <div class="card uper"> -->

    <div class="card-header">
        <a class="btn btn-primary" href="{{ route('posts.create') }}"> Create New Post</a>
    </div>

    {{-- {{ dd(Auth::user()) }} --}}

    <div class="card-body">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Post Title</th>
                    <th>Post Body</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td><a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a></td>
                    <td><a class="btn btn-primary" href="{{ route('posts.show',$post->id) }}">Show</a></td>
                    <td>
                        <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection