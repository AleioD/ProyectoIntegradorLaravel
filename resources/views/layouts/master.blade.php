<?php

$navLinks = [
  "Perfil"=> "perfil",
  "Cerrar Sesión" => "logout"];
$navAccess=[
  "Inicio" => "index",
  "Acerca de" => "about",
  "FAQ's" => "faq",
  "Login" => "login",
  "Registrarse" => "register",
];
$navLog=[
  "Inicio" => "index",
  "Acerca de" => "about",
  "FAQ's" => "faq",
];
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Master</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <header> <!-- Encabezadp -->
      <nav class="main-nav">
<!-- probando el menu desplegable de bootstrap-->

@auth
    <div class="toggle-nav">
        <div class="btn-group">

          <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons">menu</i>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <button class="dropdown-item" type="button">
                <?php foreach ($navAccess as $linkAcc => $links) : ?>
                  <li class="navLink"><a href="<?php echo $links; ?>"> <?php echo $linkAcc; ?> </a></li>
                <?php endforeach; ?>
                </button>

          </div>
        </div>
</div>

@endauth

@guest

            <div class="nav-profile-ico">
              <div class="btn-group">
                <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">account_circle</i>
                </button>
                <div class="dropdown-menu dropdown-menu-left">
                  <button class="dropdown-item" type="button">
                  <li>  <?php foreach ($navLinks as $linkPer => $linkUrl) : ?>
                    <a style="color:#FFFFFF; font-size:1.2em ;" href="<?= $linkUrl;?>"><?php echo $linkPer; ?>
                    </a></li>
                        <?php endforeach; ?></button>

  </div>
</div></div>
<div class="toggle-nav">
   <div class="btn-group">

     <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <i class="material-icons">menu</i>
     </button>
     <div class="dropdown-menu dropdown-menu-right">
       <button class="dropdown-item" type="button">
           <?php foreach ($navLog as $linkL => $linkLs) : ?>
             <li class="navLink"><a href="<?php echo $linkLs; ?>"> <?php echo $linkL; ?> </a></li>
           <?php endforeach; ?>
           </button>
     </div>
   </div>
</div>
@endguest


@auth
          <ul class="nav-profile">

              <div class="btn-group">
                <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">account_circle</i>
                </button>
                <div class="dropdown-menu dropdown-menu-left">
                  <button class="dropdown-item" type="button">
                  <li>  <?php foreach ($navLinks as $linkPer => $linkUrl) : ?>
                    <a style="color:#FFFFFF; font-size:1.2em ;" href="<?= $linkUrl;?>"><?php echo $linkPer; ?>
                    </a></li>
                        <?php endforeach; ?></button>

  </div>
</div></ul>


        <ul class="nav-access">
          <?php foreach ($navLog as $linkLog => $linkLs) : ?>
            <li class="navLink"><a href="<?php echo $linkLs; ?>"> <?php echo $linkLog; ?> </a></li>
          <?php endforeach; ?> </ul>

@endauth

@guest

  <ul class="nav-access">
  <?php foreach ($navAccess as $linkAcc => $links) : ?>
    <li class="navLink"><a href="<?php echo $links; ?>"> <?php echo $linkAcc; ?> </a></li>
  <?php endforeach; ?></ul>

@endguest


      </nav>
    </header>

<div class="container">
    @yield('content')
</div>

<footer>
    <h4 class="h4-footer">Copyright 2019</h4>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
