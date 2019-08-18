<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('pageTitle')</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/style.css" title="ppal" id="style1">
  <link rel="stylesheet" href="/css/style2.css" title="onFire">
  <link rel="stylesheet" href="/css/style3.css" title="peace">
</head>

<body>

  <div class="container">
    @include('partials.navbar')
    @yield('content')
  </div>
  @include('partials.footer')
</body>
</html>
