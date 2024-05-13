@include('layouts.partials._head')
       
		@include('layouts.partials._sidebar')
        
    @include('layouts.partials._navigation')

    <div class="container" >
         @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
