<style>
    .btn-floating{
    
    margin-top: 2rem;
    margin-block-end: 1.5rem;
    
}
</style>
<?php ?>
<div class="container">
    <table class="highlight centered">
    <thead class ="teal darken-4 white-text">
        <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Sexo</th>
        <th></th>
        <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($sqlAlumno as $alumnoview) { ?>
            <tr>
    <td><?php echo $alumnoview->id; ?></td>
    <td><?php echo $alumnoview->nombre; ?></td>
    <td><?php echo $alumnoview->sexo; ?></td>
    <td>
    <?php if ($alumnoview->sexo == 'M') { ?>
    <i class = "material-icons prefix blue-text">male</i>
    <?php } else { ?>
    <i class = "material-icons prefix red-text">female</i>
    <?php } ?>
    </td>
    <td>
    <button class="btn waves-effect waves-light green darken-1" type="submit" name="action">
    <a href="?menu=editalumno&idalumno=<?php echo $alumnoview->id; ?>">
    <i class="material-icons right white-text">mode_edit</i></a>
    </button>
    <button class="btn waves-effect waves-light  red darken-3" type="submit" name="action">
    <a href="?menu=deletealumno&idalumno=<?php echo $alumnoview->id; ?>">
    <i class="material-icons right white-text">delete_forever</i></a>
    </button>

</td>
</tr>
<?php } ?>

    </tbody>
</table>
<div class=" row center ">
<!-- <button class="btn-floating btn-large waves-effect waves-light blue" type="submit" name="action">
        <a href="?menu=insertalumno">
        <i class="material-icons right white-text centered">add</i></a> -->

        <a class="btn-floating btn-large waves-effect waves-light pink darken-3" href="?menu=insertalumno">
            <i class="material-icons">add</i>
        </a>
    </div>
</div>

