<?php

require '../controlador/conexion.php';

$errors = array();

$sql = "SELECT * FROM doctor";

$result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../vista/otros/iconos/css/all.css">
</head>
<body>
    <div id="contendor">
        <div id="contenedordoctor">
            <table id="tabledoctor">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>ESPECIALIDAD</th>
                    <th>COLEGIADO</th>
                    <th>CARGO</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>
                        <a href="">
                            <button>
                                <i class="fas fa-trash"></i>
                            </button>  
                        </a>
                    </td>
                    <td>
                        <a href="">
                            <button>
                                <i class="fas fa-user-edit"></i>
                            </button>  
                        </a>
                    </td>
                </tr>
            </table>
            <a href="">
                <button>
                    <i class="fas fa-user-plus"></i>
                </button>
            </a>
        </div>
    </div>
</body>
</html>