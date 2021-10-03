<form action="./controller/cambiarDatos.php" method="POST">
                    
    <input type="hidden" name="id_alumno" value="<?php echo  $sqlAlumno['id_alumno']  ?>">
    <input type="text" class="form-control mb-3" name="grupo" placeholder="grupo" 
    value="<?php echo  $sqlAlumno['grupo']  ?>">
    <input type="text" class="form-control mb-3" name="carrera" placeholder="carrera" 
    value="<?php echo  $sqlAlumno['carrera']  ?>">
    <input type="text" class="form-control mb-3" name="turno" placeholder="turno" 
    value="<?php echo  $sqlAlumno['turno']  ?>">
                                
    <input type="submit" class="btn  center btn-primary btn-block" value="Guardar">
</form>