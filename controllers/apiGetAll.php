<?php
/*
    Clase contenedora de obtener todos
*/

    include_once 'models/getAll.php'; //se incluye el modelo donde exclusivamente se obtiene todos los registros
    include_once 'apiTools.php';// se incluye el fichero que contienen los mensajes para utilizarlos

    class apiGetAll{

        function getAll(){
            $escuela = new getAll();// se asgina a la variable escuela lo que contiene getAll()
            $menssaje = new apiTools();// se asgina a la variable messaje lo que contiene apiTools()

            $escuelas = array();//Se crea un array vacio
            $escuelas["items"] = array(); //Se inicia el array agregando "items" 

            $res = $escuela->allScholl();//Mediante la variable res se obtiene el query que contiene la instrucción a BD

            if($res->rowCount()){ //Se verifica si contiene algun registro devuelto del query 
                while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                    /*
                        si es valido el if anterior asigna con
                        dato valor mediante la variable row asignando
                    */
                    $item=array(
                        "id" => $row['id'],
                        "clave" => $row['clave'],
                        "nombre" => $row['nombre'],
                        "telefono" => $row['telefono'],
                        "direccion" => $row['direccion'],
                        "logo" => $row['logo']
                    );
                    array_push($escuelas["items"], $item);// se utiliza un array_push 
                    //para ir agregando valor por valor al array mediante la variable item
                }
                /*
                    Se crea la variable container  y se manda a llamar
                    el metodo correspondiente para asi mostrar todos los 
                    registros que contiene la variable escuelas
                */
                
                $container = $menssaje->printJSON($escuelas); 

            }else{
                /*
                    Se crea la variable containerError  y se manda a llamar
                    el metodo correspondiente para asi mostrar el mensaje
                    en caso de no haber encontrado algun elemento
                */
                $containerError = $menssaje->error('No hay elementos');
            }
        }
    }
?>