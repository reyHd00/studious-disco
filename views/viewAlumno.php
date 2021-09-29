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
            <i class="material-icons right">delete</i>
            </button>
            <button class="btn waves-effect waves-light" type="submit" name="action">
            <i class="material-icons right">edit</i>
            </button>
            </td>
            </tr>
        <?php } ?>
</tbody>
</table>
