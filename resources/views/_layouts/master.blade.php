<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name') }}</title>
        <link href="/css/bulma.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
    </head>
    <body>
      @include('_layouts.partials.navbar')        
        <div class="container">
          @yield('body')
        </div>
    </body>
</html>