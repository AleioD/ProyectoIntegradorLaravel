@extends('layouts.master')
 
@section('content')
 
 <div class="container mt-5 mb-5 pt-5">
    <div class="row">
      <form class="ingreso col-md-6 offset-md-3" action="" method="post" enctype="multipart/form-data">
        <div class="form-group fontLatoLabel">
          <label for="userName">Nombre de Usuario:
          </label>
          <input class="form-control" id="userName" type="text" name="userName"
          value=""
          placeholder="Nombre de usuario">
        </div>
          <div class="alert alert-danger">
          </div>
        <div class="form-group fontLatoLabel">
          <label for="nombre">Nombre:</label>
          <input class="form-control" id="nombre" type="text" name="nombre"
          placeholder="Nombre">
        </div>
          <div class="alert alert-danger">
          </div>
        <div class="form-group fontLatoLabel">
          <label for="nombre">Apellido:</label>
          <input class="form-control" id="apellido" type="text" name="apellido"
          placeholder="Apellido">
        </div>
          <div class="alert alert-danger">
          </div>
        <div class="form-group fontLatoLabel">
          <label for="email">Email:
          </label>
          <input class="form-control" id="email" type="email" name="email"
          placeholder="Correo electrónico">
        </div>
          <div class="alert alert-danger">
          </div>
        <div class="form-group fontLatoLabel">
          <label for="pais">Pais:</label>
          <select class=" form-control" name="pais">
            <option value="">Elegí un país</option>
              <option value="">Argentina</option>
            </select>
              <div class="alert alert-danger">
              </div>
          </div>
          <div class="form-group fontLatoLabel">
            <label for="avatar">Sube un avatar: </label>
            <div class="custom-file">
            <input type="file" name="avatar" class="custom-file-input" id="customFileLang" lang="es">
            <label class="custom-file-label"  for="customFileLang">Seleccionar Archivo</label>
          </div>
                    </div>





          <div>
            <?php if ( isset($erroresTotales["inAvatar"]) ) : ?>
              <div class="alert alert-danger">
                <?= $erroresTotales["inAvatar"]; ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="form-group fontLatoLabel">
            <label for="password">Contraseña:
            </label>
            <input class="form-control" id="password" type="password" name="password" value="" placeholder="Contraseña">
          </div>
          <?php if ( isset($erroresTotales["inPassword"]) ) : ?>
            <div class="alert alert-danger">
              <?= $erroresTotales["inPassword"]; ?>
            </div>
          <?php endif; ?>
          <div class="form-group fontLatoLabel">
            <label for="repassword">Repite contraseña:
            </label>
            <input class="form-control" id="repassword" type="password" name="repassword" value="" placeholder="Repetir contraseña">
          </div>
          <?php if ( isset($erroresTotales["inRepassword"]) ) : ?>
            <div class="alert alert-danger">
              <?= $erroresTotales["inRepassword"]; ?>
            </div>
          <?php endif; ?>
          <button class="btn btn-success" type="submit" name="button">Registrarse</button>
        </form>

      </div>

    </div>
 
@endsection