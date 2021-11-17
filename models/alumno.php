<?php
include('conectadb.php');
class Alumno {

    public $id;    
    public $nombre;
    public $sexo;

    public function __construct($id, $nombre, $sexo) {
        $this->id = $id;
           
        $this->nombre = $nombre;
        $this->sexo = $sexo;
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
            $listaAlumnos[] = new Alumno($alumno['id'], $alumno['nombre'], $alumno['sexo']);
        }
        $mysqli->close();
        return $listaAlumnos;
    }
    public static function login($_user, $_pass) {
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('SELECT user, pass FROM usuario WHERE user = ? and pass = ?');
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
        $stmt = $mysqli->prepare('DELETE FROM alumno WHERE id = ? ');
        $stmt->bind_param('i', $_idalumno);
        $stmt->execute();
        $resultado = $stmt->get_result();
        }
        public static function consultarAlumno($_idalumno) {
            $mysqli = conectadb::dbmysql();
            $stmt = $mysqli->prepare('SELECT * FROM alumno WHERE id = ?');
            $stmt->bind_param('i', $_idalumno);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $fila = $resultado->fetch_array();
            return $fila;
        }
      
        public static function edit($_nombre,$_sexo,$_id) {
            $mysqli = conectadb::dbmysql();
            $stmt =$mysqli->prepare ('UPDATE alumno SET nombre =?, sexo=? WHERE id =? ');
            $stmt->bind_param("ssi",$_nombre,$_sexo,$_id);
            $stmt -> execute();
            $resultado = $stmt->get_result();
            $acceso = false;
             if ($stmt->affected_rows == 1) {
               $acceso = true;
            }
           $mysqli->close();
              return $acceso;
            
            }
        public static function insert($_id, $_nombre, $_sexo) {
                
            $mysqli = conectadb::dbmysql();
            $stmt = $mysqli->prepare('INSERT INTO alumno(id, nombre, sexo) VALUE (?,?,?)');
            $stmt->bind_param("sss", $_id, $_nombre, $_sexo);
            $stmt->execute();
            $acceso = false;
            if ($stmt->affected_rows == 1) {
                $acceso = true;
            }
            $mysqli->close();
            return $acceso;
        }
}
?>
