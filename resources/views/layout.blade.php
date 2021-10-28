<!DOCTYPE html>

<html class="no-js" lang="zxx">

<head>
    @include('partials._head')
</head>

<body>

    {{-- body head --}}
    @include('partials._header')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('partials._footer')

    {{-- portal's js's --}}
    @include('partials._scripts')

    {{-- own's page js's --}}
    @yield('scripts')

</body>

</html>
