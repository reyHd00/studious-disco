<?php
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])) {
?>
    <!--encabezado-->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper black">
                <a href="index.php" class="brand-logo">Environmental</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="?menu=home">Inicio</a></li>
                    <li><a href="?menu=acercade">Blog</a></li>
                    <li><a href="?menu=logout">Logout</a></li>
                    
                    <li><a href="?menu=carrusel">Carrusel</a></li>
                    
                    <li><a href="?menu=alumno">Alumno</a></li>
                </ul>
            </div>
        </nav>
    </div>
<?php
} else { ?>
<!-- encabezado sin logear -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper black">
                <a href="index.html" class="brand-logo">Environmental</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="?menu=home">Inicio</a></li>
                    <li><a href="?menu=acercade">Blog</a></li>
                    <li><a href="?menu=login">Login</a></li>
                    <li><a href="?menu=registrarse">Sing in</a></li>
                    <li><a href="?menu=carrusel">Carrusel</a></li>
                    
                </ul>
            </div>
        </nav>
    </div>
<?php 
} ?>