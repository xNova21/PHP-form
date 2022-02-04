<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario contacto</title>
    <link href="estilos.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

</head>

<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre:" value="<?php if (!$enviado && isset($nombre)) echo $nombre ?>" id="nombre">
            <input type="text" class="form-control" name="correo" placeholder="Correo:" value="<?php if (!$enviado && isset($correo)) echo $correo ?>" id="correo">
            <textarea name="mensaje" class="form-control" placeholder="Mensaje"  id="mensaje"><?php if (!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
            <?php if (!empty($errores)) : ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>

            <?php elseif ($enviado) : ?>
                <div class="alert success">
                    <p>Enviado correctamente</p>
                </div>

            <?php endif ?>
            <input type="submit" name="submit" class="btn btn-primary" id="submit" value="Enviar mensaje">
        </form>
    </div>
</body>

</html>