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

                <?php
                
                if($result){
                    if($result->num_rows>0){
                        while($doctores = $result->fetch_assoc()){ 
                ?>

                <tr>
                    <td><?php echo $doctores ['iddoctor']?></td>
                    <td><?php echo $doctores ['Nombre']?></td>
                    <td><?php echo $doctores ['Especialidad']?></td>
                    <td>CMP: <?php echo $doctores ['ncolegiado']?></td>
                    <td><?php echo $doctores ['Cargo']?></td>
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
                <?php
                                }
                            }else{
                                $errors[] = "No hay registros pendientes";
                            }
                        } else{
                            $errors[] = "Lo sentimos intentalo mas tarde";
                        }    
                        
                        
                        if(count($errors)>0){
                            echo"<div class  = 'errores'>";
                            foreach($error as $errors){
                                echo"El error es ".$error." nro de error ".$errors;
                            }
                            echo"</div>";
                        }
                ?>
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