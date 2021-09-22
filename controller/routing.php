<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
// $var_getMenu = $_GET['menu'];

switch ($var_getMenu) {
    case "inicio":
        require_once('./views/home.php');
        break;
    case "acercade":
        require_once('./views/acercade.php');
        break;
    case "login":
        require_once('./views/login.php');
        break;
    case "registrarse":
        require_once('./views/singin.php');
        break;
    case "carrusel":
        require_once('./views/carrusel.php');
        break;
    case "usuario":
        include_once './models/usuario.php';
        $sqlUsuario = Usuario::consultar();
        include_once './models/consulta.php';
        break;
    case "alumno":
        include_once './models/alumno.php';
        $sqlAlumno = Alumno::consultar();
        include_once './models/consulta02.php';
        break;
    
    default:
        require_once('./views/home.php');
}


?>
