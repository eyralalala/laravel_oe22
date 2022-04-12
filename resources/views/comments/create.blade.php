@extends('Layouts.main.app')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>

<!-- <div class="card uper"> -->
    <div class="card-header">
        <h3>Create Comment</h3>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
        @endif
        <form action="comments" method="POST">
            <div class="form-group">
                <label for="post_id">Post:</label>
                <select name="post_id" id="post_id">
                    @foreach ($posts as $post)
                        <option name="post_id" value="{{ $post->id}}">{{ $post->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                @csrf
                <label for="comment">Comment:</label>
                <input type="text" class="form-control" name="comment" id="comment" />
            </div>

            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <div class="row">
        <div class="col-6">

            @foreach($posts as $post)

            <h3>{{ $post->title }}</h3>
    
            <ul>
                @foreach($post->comments as $comment)
                    <li>{{ $comment->comment }}</li>
                @endforeach   
            </ul>

            @endforeach
        </div>
    </div>


   
</div>
@endsection