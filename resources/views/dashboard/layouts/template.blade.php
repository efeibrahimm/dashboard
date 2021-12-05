@include('dashboard.layouts.header')
@include('dashboard.layouts.sidebar')


@yield('content')


<script type="application/javascript" src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@stack('scripts')
@include('dashboard.layouts.footer')
