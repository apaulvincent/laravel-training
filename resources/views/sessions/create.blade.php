@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h3>Login</h3>

                <form action="/login" method="POST">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Login</button>
                    </div>
                    
                </form>

            </div>
        </div>
    </div>
@endsection



