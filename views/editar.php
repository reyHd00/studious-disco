<div class="container">
<form action="./controller/cambiarDatos.php" method="POST" class="center | z-depth-3 center" >
                    
    <input type="hidden" name="id" value="<?php echo  $sqlAlumno['id']  ?>">
    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo  $sqlAlumno['nombre']  ?>">
    <input type="text" class="form-control mb-3" name="sexo" placeholder="sexo" value="<?php echo  $sqlAlumno['sexo']  ?>">
                                
    <input type="submit" class="btn btn-primary btn-block" value="Guardar">
</form>
</div>