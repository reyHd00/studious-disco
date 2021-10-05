<?php

if (filter_input_array(INPUT_POST)) {
                 
    $_idalumno =  trim(filter_input(INPUT_POST, 'id_alumno'));   
    $_grupo = trim(filter_input(INPUT_POST, 'grupo'));
    $_carrera = trim(filter_input(INPUT_POST, 'carrera'));
    $_turno = trim(filter_input(INPUT_POST, 'turno'));
    include_once '../models/alumno.php';

    $edit = Alumno::edit($_grupo,$_carrera, $_turno,$_idalumno);
        if ($edit){
            header("location: ../index.php?menu=alumno");
        } else{
            echo 'Error, no se pudo actualizar';
        }

}

?>