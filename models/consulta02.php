<?php
    //relizar la conexion a la BD
    include ('conexion.php');
    // Realizar consulta SQL
    
    $consulta    = "select * from alumno";
    echo ('<br>');
    echo ($consulta);
    $resultado   = mysqli_query($conexion, $consulta);

    if (!$resultado){

       echo 'No pudo seleccionar la base de datos';
       exit;
    }

     while ($filasql= mysqli_fetch_array($resultado)) {
         
        // Imprimir por Indice del Arreglo
        echo '<br>';
        echo $filasql[0].' ';
        echo $filasql[1].' ';
        echo $filasql[2].' ';
        echo $filasql[3].' ';
        echo '-';
        // Imprimir por Arreglo Asociado
        echo $filasql['id_alumno'].' ';
        echo $filasql['grupo'].' ';
        echo $filasql['carrera'].' ';
        echo $filasql['turno'].' ';
        
    }
    mysqli_close($conexion);
?>