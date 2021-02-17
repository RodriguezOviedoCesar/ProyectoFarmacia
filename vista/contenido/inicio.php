<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../otros/iconos/css/all.css">
    <link rel="stylesheet" href="../otros/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div id="contenedor">
        <div id="contenedor1">
            <div id="login">
                <div class="dark" id="contenidologin">
                    <div id="imagen">
                        <img src="http://via.placeholder.com/250x250" alt="userlogo" title="userlogo">      
                    </div>
                    <form action="registro.php" method="POST">
                        <div>
                            <span><i class="fas fa-envelope"></i>Email:</span>
                            <br>
                            <input type="email" name="Email" id="Email" placeholder="Email@email.com" require>
                        </div>
                        <div>
                            <span><i class="fas fa-key"></i>Contraseña:</span>
                            <br>
                            <input type="password" name="Contraseña" id="Contraseña" required>
                        </div>
                        <div id="botones">
                            <input class="btn btn-success" type="submit" value="Enviar">
                            <input class="btn btn-danger" type="reset" value="Cancelar">
                        </div>
                    </form>      
                </div>

            </div>
        </div>
    </div>
</body>
<head>
    <script type="text/javascript" src="../otros/iconos/js/all.js"></script>
    <script type="text/javascript" src="../otros/bootstrap/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../otros/bootstrap/js/bootstrap.min.js"></script>
</head>
</html>