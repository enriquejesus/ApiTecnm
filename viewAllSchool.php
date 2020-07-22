<?php

    include_once 'controllers/apiGetAll.php'; // se incluye el archivo que contiene parte de la api que trae todo los registrpos
    $showAllSchool = new apiGetAll(); // se asigna a la variable showAllSchool
    $showAllSchool->getAll(); //se invoca a la funcion getAll con todo los registros
    
?>