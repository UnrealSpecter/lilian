
    <!-- BASE CSS -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/normalize/css/normalize.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap-4.0/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('plugins/animate/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    <!-- per page additional css -->
    @yield('additional-css')
