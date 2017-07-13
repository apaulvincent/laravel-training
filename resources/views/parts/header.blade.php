<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @include('parts.navigation')
            </div>
            <div class="col-md-6">

                @if( Auth::check() )
                <div class="pull-right">{{ Auth::user()->name }}</div>
                @endif 

            </div>
        </div>
    </div>
</header>