<?php ?>
<table class="striped ">
    <thead class ="black white-text">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($sqlUsuario as $usuarioview) {
            ?>
            <tr>
            <td><?php echo $usuarioview->id_usuario; ?></td>
            <td><?php echo $usuarioview->nombre; ?></td>
            <td><?php echo $usuarioview->apellido; ?></td>
            <td><?php echo $usuarioview->telefono; ?></td>
            </tr>     
            <td>
            <button class="btn waves-effect waves-light red" type="submit" name="action">
            <i class="material-icons right">delete</i>
            </button>
            <button class="btn waves-effect waves-light" type="submit" name="action">
            <i class="material-icons right">edit</i>
            </button>
            </td>
            </tr>
            <?php 
        } ?>
    </tbody>
</table>