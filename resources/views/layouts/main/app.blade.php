<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>App Name - @yield('title')</title>

    @include('layouts.main.shared.style')

</head>

<body>

    <!-- @yield('content') -->

    <div id="app" class="wrapper">

        <!-- sidebar -->
        

        <!-- main -->
        @include('layouts.main.main')

    </div>

    @include('layouts.main.shared.script')

    @yield('script')

</body>

</html>