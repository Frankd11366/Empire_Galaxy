<?php
include('header.php');


?>

<div class="container-fluid mt-3">

  <h2>Formulario de Cotización</h2>
  <form action="/submit_cotizacion" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="nombre">Apellido:</label><br>
    <input type="text" id="apellido" name="apelldio" required><br>

    <label for="nombre">Fecha de Nacimiento:</label><br>
    <input type="date" id="fecha" name="fecha" required><br>

    <label for="email">Correo Electronico:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="telefono">Teléfono:</label><br>
    <input type="tel" id="telefono" name="telefono" required><br>

    <label for="servicio">Servicio Requerido:</label><br>
    <select id="servicio" name="servicio">
      <option value="Desarrollo de Software">Desarrollo de Software</option>
      <option value="Diseño Web">Diseño Web</option>
      <option value="Consultoría en Tecnología">Consultoría en Tecnología</option>
      <option value="Otros">Otros</option>
    </select><br>

    <label for="mensaje">Escriba lo que necesita especificamente :</label><br>
    <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br>

    <button class="bg-warning" type="button" 
    onclick="alert('Su información ha sido enviada correctamente, pronto el Equipo de Empire Galxy se comunicará contigo, gracias por confiar en Nuestro Equipo')"> 
    Solicitar Cotizacion</button>

  </form>


<?php
include('footer.php');


?>