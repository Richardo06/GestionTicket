@include('layouts.partials._head')
       
		@include('layouts.partials._sidebar')
        
    @include('layouts.partials._navigation')

    <div class="container" >
         @yield('content')
    </div>

