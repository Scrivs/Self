<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $title or 'GabStack' }}</title>
        <meta name="description" content="{{ $description or 'GabStack ensures that your message reaches your audience.' }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="/assets/img/favicon.png" rel="icon" type="image/png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="/assets/css/app.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="https://use.typekit.net/aud1yey.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
        @yield('styles')
    </head>
    <body class="">
        @yield('content')
        <script src="/assets/js/site.js"></script>
        @yield('footScripts')
        <script>$(document).foundation();</script>
        @if (ENV('APP_ENV') == 'production')
        <!-- Begin Google Analytics -->
            
        @endif
    </body>
</html>