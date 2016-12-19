<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="/css/bulma.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/landing.css">
  <style type="text/css">
      .is-dark {
        background-color: #F62459;
        background-image: linear-gradient(rgba(0,209,178, 0.6),rgba(241,231,221, 0.6)),linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6)), url('{{ asset("img/landing.jpg") }}');
        }      
  </style>
</head>
<body>
  <section class="hero is-fullheight is-dark">
    <div class="hero-head">
      <div class="container">
          @include('_layouts.partials.navbar')
            
      </div>
    </div>

    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns is-vcentered">
          <div class="column is-5">
            <figure class="image is-4by3">
              <img src="{{ asset('img/landing3.jpg') }}" class="promo-img" alt="Description">
            </figure>
          </div>
          <div class="column is-6 is-offset-1">
            <h1 class="title is-2">
              Welcome to Landing Page
            </h1>
            <h2 class="subtitle is-4">
              It's time to say hello to bulma.
            </h2>
            <br>
            
          </div>
        </div>
      </div>
    </div>

    <div class="hero-foot">
      <div class="container">
        <div class="tabs is-centered">
          <ul>
            <li><a href="http://bulma.io">Made with bulma</a></li>
            <li><a>Copyright 2016 Bulma</a></li>
            <li><a href="https://github.com/sphinix27/book-records">Sphinix</a></li>            
          </ul>
        </div>
      </div>
    </div>
  </section>
</body>
</html>