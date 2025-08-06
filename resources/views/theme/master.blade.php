<!doctype html>
<html class="no-js" lang="zxx">

@include('theme.partials.head')

<body>
    @include('theme.partials.preloader_start')
    @include('theme.partials.header')
    <main>
        @yield('content')
    </main>
    @include('theme.partials.footer')
    @include('theme.partials.scripts')

</body>

</html>
