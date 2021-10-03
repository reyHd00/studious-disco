<?php ?>
<table class="striped ">
    <thead class ="black white-text">
        <tr>
            <th>Id</th>
            <th>Grupo</th>
            <th>Carrera</th>
            <th>Turno</th>
            
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($sqlAlumno as $alumnoview) { ?>
            <tr>
            <td><?php echo $alumnoview->id; ?></td>
            <td><?php echo $alumnoview->grupo; ?></td>
            <td><?php echo $alumnoview->carrera; ?></td>
            <td><?php echo $alumnoview->turno; ?></td>
            
            <td>
            <button class="btn waves-effect waves-light red" type="submit" name="action">
            <a href="?menu=deletealumno&idalumno=<?php echo $alumnoview->id; ?>">
            <i class="material-icons right white-text">delete</i></a>
            <button class="btn waves-effect waves-light yellow" type="submit" name="action">
            <a href="?menu=editalumno&idalumno=<?php echo $alumnoview->id; ?>">
            <i class="material-icons right">edit</i>
            </button>
            </td>
            </tr>
            <?php 
        } ?>
</tbody>
</table>

<table class="nuevo">
    <button class="btn waves-effect waves-light blue" type="submit" name="action">
    <a href="?menu=insertalumno&idalumno=<?php echo $alumnoview-> id;?>">
    <i class="material-icons right white-text">add</i></a>
</table>
