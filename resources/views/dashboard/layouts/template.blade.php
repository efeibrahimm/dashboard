@include('dashboard.layouts.header')
@include('dashboard.layouts.sidebar')


@yield('content')



@stack('scripts')
@include('dashboard.layouts.footer')
