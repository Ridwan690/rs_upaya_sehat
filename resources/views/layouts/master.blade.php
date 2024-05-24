<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UPAYA SEHAT HOSPITAL</title>
        @include('partials.styles')
    </head>
    <body>
        @include('partials.topbar')
        @include('partials.navbar')
            @yield('content')
        @include('partials.footer')
        @include('partials.scripts')
    </body>
</html>
