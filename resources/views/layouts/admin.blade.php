<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 11 Study</title>
        <link rel="stylesheet" href="{{ asset('assets/admin/bootstrap/bootstrap.min.css') }}">
        <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>
    </head>
    <body>

        @yield('content')

        <script src="{{ asset('assets/admin/bootstrap/bootstrap.min.js') }}"></script>
    </body>
</html>