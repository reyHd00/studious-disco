<style>
    div.row{
        margin: 2rem;
        padding-top: 1rem;
        text-transform: capitalize;
    }
    input.nombre{
        text-transform: capitalize;
    }
    input.sexo{
        text-transform: uppercase;
    }
</style>
<div class="container">
    <div class="row">
       <form action="./controller/insertarDatos.php" method="POST" class="m-3">
    

        <input type="text" name="id" class = "form-control mb-3" placeholder="Id" disabled>
        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" >
        <input type="text" class="form-control mb-3" name="sexo" placeholder="Sexo: M o F" maxlength="">
                                    
        <input type="submit" class="btn  btn-primary btn-block" value="Aceptar">
    </form> 
    </div>
    
</div>
