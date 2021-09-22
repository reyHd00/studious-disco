<?php
include('conect_db.php');
class Usuario {
    public $id_usuario;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($id_usuario, $nombre, $apellido, $telefono) {
        $this->id = $id_usuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
    }
    public static function consultar() {

        $mysqli = conect_db::dbmysql();
        $consulta = "select * from usuario";
        echo ('<br>');
        // echo ($consulta);
        $resultado = mysqli_query($mysqli, $consulta);
        echo 'no se hizo la consulta ';
        if (!$resultado) {
            echo 'No pudo Realizar la consulta a la base de datos';
            exit;
        }
        $listaUsuario = [];
        
        while ($usuario = mysqli_fetch_array($resultado)) {
            $listaUsuario[] = new Usuario($usuario['id_usuario'], 
            $usuario['nombre'], $usuario['apellido'], $usuario['telefono']);
        }
        $mysqli->close();
        return $listaUsuario;
    }
}
?>
