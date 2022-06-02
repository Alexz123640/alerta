<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
        <form method="POST" action="api.php?tipo=registro-nuevo">
            idpersona
            <input name="idpersona" type="text"><br>
            localizacion
            <input name="localizacion" type="text"><br>
            iddistrito
            <input name="iddistrito" type="text"><br>
            idmensaje
            <input name="idmensaje" type="text"><br>
            foto
            <input name="foto" type="text"><br>
            audio
            <input name="audio" type="text"><br>
            <input type="submit" value="REgistrar" />
        </form>
        usuario
        <form method="POST" action="api.php?tipo=persona-nuevo-cli">
            DNI
            <input name="DNI" type="text"><br>
            Nombres
            <input name="nombres" type="text"><br>
            apellidoPaterno
            <input name="apellidopat" type="text"><br>
            apellidoMaterno
            <input name="apellidomat" type="text"><br>
            fecha nacimiento
            <input name="fechanac" type="text"><br>
            celular
            <input name="celular" type="text"><br>
            correo
            <input name="correo" type="text"><br>
            direccion
            <input name="direccion" type="text"><br>
            iddistrito
            <input name="iddistrito" type="text"><br>
            Contraseña
            <input name="pass" type="text"><br>

            <input type="submit" value="REgistrar" />
        </form>
    </body>
</html>