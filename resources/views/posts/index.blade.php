@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($posts as $post)
                    <div class="form-group">
                        <h2><a href="posts/{{$post->id}}">{{ $post->title }}</a></h2>
                        <small>{{ $post->created_at->toFormattedDateString() }}</small>
                        <p>{{ $post->body }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection



