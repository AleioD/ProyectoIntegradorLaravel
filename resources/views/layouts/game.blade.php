<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('pageTitle')</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/style.css">

</head>

<body class="game">
@include('partials.dark-navbar')
  <div class="container-fluid">
    <i class="material-icons cerrar">close</i>
    @yield('content')

  </div>
  @include('partials.footer')
</body>
</html>