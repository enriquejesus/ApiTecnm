<?php

// Se incluye el archivo de la bd
include_once 'all.php';

// Se crea la clase getAll para asi ir obteniendo la información de la BASE DE DATOS
    class getAll extends db{

        /*
            Se crea la función allScholl, con la cual se pretende 
            obtener todos los registros de de la tabla 'escuelas'
        */
        function allScholl(){
            $query = $this->connect()->query('SELECT * FROM escuelas');
            
            return $query;
            //Se retorna el query 
        }

    }

?>