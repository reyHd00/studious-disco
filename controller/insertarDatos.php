<?php
if (filter_input_array(INPUT_POST)) {
                    
    $_id =  trim(filter_input(INPUT_POST, 'id_alumno'));   
    $_grupo = trim(filter_input(INPUT_POST, 'grupo'));
    $_carrera = trim(filter_input(INPUT_POST, 'carrera'));
    $_turno = trim(filter_input(INPUT_POST, 'turno'));
    include_once '../models/alumno.php';
            
    $insert = Alumno::insert($_id,$_grupo,$_carrera, $_turno);
    if ($insert){
        header("location: ../index.php?menu=alumno");
    } else{
        echo 'Error, no se pudo actualizar';
    }
    }

?>