<?php

        require_once 'conexion.php';

        $errors = array();
    
        if(isset($_GET['iddoctor'])){
            $doctores = $_GET['iddoctor'];
            if(empty($doctores)){
                $errors[] = "No se encontro el id en el destino";
            }else{
                $sql = "DELETE FROM doctor WHERE iddoctor = $doctores ";
    
                $resul  = $mysqli->query($sql);
            }
        }else{
            $errors[] = "Usted no puede estar en esta pagina";
        }
?>

