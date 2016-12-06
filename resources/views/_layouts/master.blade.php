<!DOCTYPE html>
<html>
    <head>
        <title>Book</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
    </head>
    <body>
        <nav class="nav">
          <div class="nav-left">
            <a class="nav-item is-brand" href="#">
              <p style="font-family: 'Yantramanav', sans-serif; font-size: 30px">FISCALIA
            </a>
          </div>

          <div class="nav-center">
            <a class="nav-item" href="#">
              <span class="icon">
                <i class="fa fa-github"></i>
              </span>
            </a>
            <a class="nav-item" href="#">
              <span class="icon">
                <i class="fa fa-twitter"></i>
              </span>
            </a>
          </div>

          <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>

          <div class="nav-right nav-menu">
            <a class="nav-item" href="#">
              Home
            </a>
            <a class="nav-item" href="#">
              Documentation
            </a>
            <a class="nav-item" href="#">
              Blog
            </a>

            <span class="nav-item">
              <a class="button" >
                <span class="icon">
                  <i class="fa fa-twitter"></i>
                </span>
                <span>Tweet</span>
              </a>
              <a class="button is-primary" href="#">
                <span class="icon">
                  <i class="fa fa-download"></i>
                </span>
                <span>Download</span>
              </a>
            </span>
          </div>
        </nav>
        <div class="container">
          @yield('body')
        </div>
    </body>
</html>