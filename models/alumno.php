<?php
include('conect_db.php');
class Alumno {
    public $id_alumno;
    public $grupo;
    public $carrera;
    public $turno;

    public function __construct($id_alumno, $grupo, $carrera, $turno) {
        $this->id = $id;
        $this->grupo = $nombre;
        $this->carrera = $carrera;
        $this->turno = $turno;
    }
    public static function consultar() {

        $mysqli = conectadb::dbmysql();
        $consulta = "select * from alumno";
        echo ('<br>');
        // echo ($consulta);
        $resultado = mysqli_query($mysqli, $consulta);
        
        if (!$resultado) {
            echo 'No pudo Realizar la consulta a la base de datos';
            exit;
        }
        $listaAlumnos = [];
        while ($alumno = mysqli_fetch_array($resultado)) {
        $listaAlumnos[] = new Alumno($alumno['id_alumno'], $alumno['grupo'],
         $alumno['carrera'], $alumno['turno']);
        }
        $mysqli->close();
        return $listaAlumnos;
    }
}
?>
