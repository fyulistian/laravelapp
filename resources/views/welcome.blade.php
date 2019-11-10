<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <script src="{{ mix('js/app.js') }}" type="text/javascript" defer></script>
    </head>

    <body>
        <div id="app">
        </div>
    </body>

        {{-- <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel App
                </div>
            </div>
        </div> --}}
</html>
