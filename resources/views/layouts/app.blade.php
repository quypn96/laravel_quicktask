<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ trans('client.title') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    </head>
        <div class="container">
            <nav class="navbar navbar-default">
            </nav>
        </div>
        @yield('content')
        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('bower_components/jquery/dist/jquery.slim.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}" crossorigin="anonymous">
        </script>
    </body>
</html>
