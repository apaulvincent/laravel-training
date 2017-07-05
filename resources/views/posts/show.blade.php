@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $post->title }}</h1> 
                <small>{{ $post->created_at->toFormattedDateString() }}</small>
                <p>{{ $post->body }}</p>   
            </div>

            <div class="col-md-12">
                <hr>
                <h3>Comments</h3>
                <section class="panel">
                    @foreach($post->comments as $comment)
                        <article class="list-group-item">
                            <strong>{{ $comment->body }}</strong> &nbsp;| &nbsp; 
                            <small>{{ $comment->created_at->diffForHumans() }}</small>
                        </article>
                    @endforeach
                </section>
                <hr>

                <form method="POST" action="/posts/{{$post->id}}/comments">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="commentTextarea">Add Comment</label>
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <textarea name="body" id="commentTextarea" class="form-control" placeholder="Comment"></textarea>
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                </form>

                @include('parts.errors')

            </div>
        </div>
    </div>
@endsection

