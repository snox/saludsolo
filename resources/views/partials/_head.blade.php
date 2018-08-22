    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SaludSolo @yield('title')</title> <!-- CHANGE THIS TITLE FOR EACH PAGE -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{ Html::style('css/app.css') }}


    @yield('stylesheets')

