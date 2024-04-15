<?php
include('header.php');


?>

<div class="container-fluid mt-3">
  <div class="container">
    <h2>Registro de Usuario</h2>
    <form action="/submit_registro" method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirmar Contraseña:</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
      </div><br>

      <button class="bg-warning" type="button" 
    onclick="alert('Se ha registrado su Usuario le damos la bienvenida a Galaxy Empire')"> 
    Registrarse</button>
    </form>
  </div>




</div>


<?php
include('footer.php');


?>