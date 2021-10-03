<?php
include('conectadb.php');
class Alumno {
    public $id_alumno;
    public $grupo;
    public $carrera;
    public $turno;

    public function __construct($id_alumno, $grupo, $carrera, $turno) {
        $this->id = $id_alumno;
        $this->grupo = $grupo;
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
    public static function login($_user, $_pass) {
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('SELECT user, pass FROM user WHERE user = ? and pass = ?');
        $stmt->bind_param('ss', $_user, $_pass);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($filasql = mysqli_fetch_array($resultado)) {
        // Imprimir por Arreglo Asociado
            echo $filasql['user'] . ' ';
            echo $filasql['pass'] . ' ';
        // initialize session variables
            session_start();
        // $_SESSION['loggedDataTime'] = datatime();
            $_SESSION['loggedUserName'] = $filasql['user'] ;
        }
        $acceso = false;
        if ($stmt->affected_rows == 1) {
            $acceso = true;
        }
        $mysqli->close();
        return $acceso;
    }
    public static function delete($_idalumno) {
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('DELETE FROM alumno WHERE id_alumno = ? ');
        $stmt->bind_param('i', $_idalumno);
        $stmt->execute();
        $resultado = $stmt->get_result();
    }
    public static function consultarAlumno($_idalumno) {
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('SELECT * FROM alumno WHERE id_alumno = ?');
        $stmt->bind_param('i', $_idalumno);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $fila = $resultado->fetch_array();
        return $fila;
    }
  
    public static function edit($_grupo,$_carrera,$_turno,$_idalumno) {
        $mysqli = conectadb::dbmysql();
        $stmt =$mysqli->prepare ('UPDATE alumno SET grupo =?, carrera =?, turno=? 
        WHERE id_alumno =? ');
        $stmt->bind_param("ssi",$_grupo,$_carrera,$_turno,$_idalumno);
        $stmt -> execute();
        $resultado = $stmt->get_result();
        $acceso = false;
         if ($stmt->affected_rows == 1) {
           $acceso = true;
        }
        $mysqli->close();
        return $acceso;
        
    }
}
?>
