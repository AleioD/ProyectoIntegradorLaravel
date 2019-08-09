@extends('layouts.master')
 
@section('content')
 
    <div class="container mt-5 p-5 containerLoginV2">
      <div class="row">
      <form class="col-md-6 offset-md-3" action="" method="post">
        <div class="form-group fontLatoLabel">
            <label for="userOrEmail">Usuario o email: </label>
          <input class="form-control" type="text" name="userOrEmail" value='$emailEnPost' placeholder='Usuario/Email'>
        </div>
          <div class="alert alert-danger">
          </div>
        <div class="form-group fontLatoLabel">
            <label for="pass">Contraseña: </label>
          <input class="form-control" type="password" name="pass" value="" placeholder="Password">
        </div>
          <div class="alert alert-danger">
          </div>
        <div class="form-check fontLatoLabel mb-5">
          <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme" value="">
          <label class="form-check-label" for="rememberme">Recordarme</label>
        </div>
        <input class="btn btn-success" id="submitLogin" type="submit" name="" value="Iniciar sesión">  ¿Aún no tenés cuenta? <a href="register.php">Registrate</a>
      </form>

    </div>
    </div>
 
@endsection