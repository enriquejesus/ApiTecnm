<?php
/*
    Se crea esta clase contenedora de mensajes tales como:

    1.- Error
    2.- Exito
    3.- PrintJSON 

    los cuales son reutilizable para la clase u archivo mande a llamar 
*/
     class apiTools{

        /*
            Nota ¡IMPORTANTE!

            Se debe concatenar con *JSON_UNESCAPED_UNICODE* ya que de no se agregado
            este no reconocera acentos y cambiara por otros caracteres, esto aun se defina UTF8 
            en la conexion a base de datos
        */
        function error($mensaje){ //mensaje de error
            echo '<code>' . json_encode(array('mensaje' => $mensaje,JSON_UNESCAPED_UNICODE)) . '</code>';
        }
    
        function exito($mensaje){//mensaje de exito
            echo '<code>' . json_encode(array('mensaje' => $mensaje,JSON_UNESCAPED_UNICODE)) . '</code>';
        }
    
        function printJSON($array){//mensaje de JSON
            echo '<code>' . json_encode($array,JSON_UNESCAPED_UNICODE) . '</code>';
         }
     }
?>