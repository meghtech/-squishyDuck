<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  <script src="https://source.zoom.us/1.7.9/lib/vendor/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

  <title>Squishy Duck</title>

  <style>

    #zmmtg-root{
      background-color:transparent!important;
      position:relative!important;
    }
  </style>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url()->previous()}}">Back to Dashboard</a>
                   </li>
                </ul>

            </div>
        </div>
    </nav>




  <noscript>
    <strong>We're sorry but poc doesn't work properly without JavaScript enabled. Please enable it to
      continue.</strong>
  </noscript>

  <div id="app">
   <!-- <example-component></example-component> -->
  </div>
  <!-- built files will be auto injected -->
  <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
  <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>


</html>