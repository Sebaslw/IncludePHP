
 <?php
if (isset($_POST['email'])) {

    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fecha = $_POST['fecha'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];

    // Destinatario del correo
    $destino = "directcafe123@gmail.com";

    // Asunto del correo
    $asunto = "Nuevo mensaje de $nombre $apellidos";

    // Contenido del mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Apellidos: $apellidos\n";
    $cuerpoMensaje .= "Fecha: $fecha\n";
    $cuerpoMensaje .= "Correo electrónico: $email\n\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    // Encabezados del correo
    $headers = "From: $email\r\nReply-To: $email";

    // Enviar correo
    mail($destino, $asunto, $cuerpoMensaje, $headers);

    // Respuesta del formulario
    echo "<div class='alert alert-success'>El correo se envió correctamente</div>";
}
?>

    <form method="post">
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" placeholder="Tu nombre">
    </div>
    <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="apellidos" class="form-control form-control-lg" placeholder="Tus apellidos">
    </div>
    <div class="form-group">
        <label for="fecha">Fecha</label>
        <input type="date" id="fecha" name="fecha" class="form-control form-control-lg">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Tu correo electrónico">
    </div>
    <div class="form-group">
        <label for="message">Mensaje</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control form-control-lg" placeholder="Escribe tu mensaje"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
</form>

</body>
</html>