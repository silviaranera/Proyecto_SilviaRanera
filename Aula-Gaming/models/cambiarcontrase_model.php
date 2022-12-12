<?php

    //Modifica la contraseña
    function cambiarContrase($conexion, $nueva, $email){
            try{
                $consulta=$conexion->prepare("UPDATE alumno SET contraseña = $nueva WHERE email = '$email' " );
                
                //UPDATE alumno SET contraseña = "silviaranera" WHERE dni ="50228184W"
                //UPDATE `alumno` SET `contraseña` = 'silviaranera' WHERE `alumno`.`email` = 'raneras@gmail.com';
                
                $consulta->execute();
                /*$resultado= $consulta->fetchAll();
                return $resultado;*/
            }
            catch (PDOException $e) {
                echo $e->getMessage();
            }
    }

?>
