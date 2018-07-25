<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Styles -->
        <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="app" class="container-fluid">
            @yield('content')
        </div>
    </body>
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    @stack('scripts')
    

</html>
