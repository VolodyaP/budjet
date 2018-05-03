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
            <div class="content" v-cloak>
                <div class="row">
                    <template>
                        <div class="col-md-12">
                            <h5>Summ: @{{ max }}</h5>
                            <b-progress :value="value" :max="max" show-value class="mb-3"></b-progress>
                        </div>
                    </template>
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <b-input-group size="lg" prepend="$" append=".00">
                            <b-form-input v-model="money"></b-form-input>
                        </b-input-group>
                    </div>

                    <div class="col-md-6" style="padding: 7px;">
                        <b-button variant="success" @click="add"> + </b-button>
                        <b-button variant="danger"  @click="subtract"> - </b-button>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>

</html>
