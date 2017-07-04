@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h3>Create Post</h3>

                <hr>

                <form method="POST" action="/posts">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="titleInput">Title</label>
                    <input type="text" name="title" class="form-control" id="titleInput" placeholder="Title">
                </div>

                <div class="form-group">
                    <label for="contentTextarea">Content</label>
                    <textarea name="body" id="contentTextarea" class="form-control" placeholder="Content"></textarea>
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

