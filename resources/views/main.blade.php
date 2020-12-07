<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prison Mike's Blog</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.2/iconfont/material-icons.min.css" integrity="sha512-y9glprRcVESvYY3suAqBUYXx0ySbQNvbzzgvLy9F2o38Y7XCNeq/No2gnHjV3+Rjyq5ijoPZRMXotpdw6jcG4g==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" />

    <style>
      body {
        font-family: 'Nunito', sans-serif;
      }

      input:not([type]):focus:not([readonly]), input[type=text]:not(.browser-default):focus:not([readonly]), input[type=password]:not(.browser-default):focus:not([readonly]), input[type=email]:not(.browser-default):focus:not([readonly]), input[type=url]:not(.browser-default):focus:not([readonly]), input[type=time]:not(.browser-default):focus:not([readonly]), input[type=date]:not(.browser-default):focus:not([readonly]), input[type=datetime]:not(.browser-default):focus:not([readonly]), input[type=datetime-local]:not(.browser-default):focus:not([readonly]), input[type=tel]:not(.browser-default):focus:not([readonly]), input[type=number]:not(.browser-default):focus:not([readonly]), input[type=search]:not(.browser-default):focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]) {
        border-bottom-color: #7e57c2;
        box-shadow: 0 1px 0 0 #7e57c2;
      }

      input:not([type]):focus:not([readonly])+label, input[type=text]:not(.browser-default):focus:not([readonly])+label, input[type=password]:not(.browser-default):focus:not([readonly])+label, input[type=email]:not(.browser-default):focus:not([readonly])+label, input[type=url]:not(.browser-default):focus:not([readonly])+label, input[type=time]:not(.browser-default):focus:not([readonly])+label, input[type=date]:not(.browser-default):focus:not([readonly])+label, input[type=datetime]:not(.browser-default):focus:not([readonly])+label, input[type=datetime-local]:not(.browser-default):focus:not([readonly])+label, input[type=tel]:not(.browser-default):focus:not([readonly])+label, input[type=number]:not(.browser-default):focus:not([readonly])+label, input[type=search]:not(.browser-default):focus:not([readonly])+label, textarea.materialize-textarea:focus:not([readonly])+label {
        color: #7e57c2;
      }

      main {
        margin-top: 32px !important;
      }
    </style>
  </head>
  
  <body>
    <nav>
      <div class="nav-wrapper deep-purple lighten-1">
        <div class="container">
          <a href="/posts" class="brand-logo">Prison Mike's Blog</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/posts/create">CREATE POST</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container">
      @if(count($errors) > 0)
        <div class="row">
          <div class="col m6">
            <div class="card red lighten-2">
              <div class="card-content white-text">
                <span class="card-title">Errors</span>
                <ul>
                  @foreach($errors->all() as $error)
                    <li style="font-size:24px"> {{ $error }} </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>

      @endif

      @yield('content')
    </main>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>