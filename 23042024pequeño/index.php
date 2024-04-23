<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>

    <header class="Titulo" >
        <h3>Registro en mi DB</h3>
    </header>
    <div class="Formulario" >
        <form action="./enviarRegistro.php" method="post">
            <hr>
            <div>
                <label for="nombre_usuario">Ingresa nombre completo:</label>
                <input type="text" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu Nombre">
                <br><br>
            </div>
             <button type="submit" name="submit"  >Enviar registro</button>
        </form>
    </div>
</body>
</html>

<a href='index.php'>Nuevo registro</a>