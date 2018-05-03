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
        <div id="app" class="container">
            <div class="row" v-cloak>
                <div class="col-md-5">
                    <b-input-group size="lg" prepend="$" append=".00">
                        <b-form-input></b-form-input>
                    </b-input-group>
                </div>

                <div class="col-md-6">
                    <b-button variant="success"> + </b-button>

                    <b-button variant="danger"> - </b-button>
                </div>
            </div>
        </div>

    </body>

    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
</html>
