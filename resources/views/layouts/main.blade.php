<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('widgets.head')
    <body>
        @yield('content')
        @include('widgets.scripts')
    </body>
</html>