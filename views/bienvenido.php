<?php
// Devolver los valores de sesión
$estado_session = session_status();
if ($estado_session == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION["loggedUserName"])) { ?>
<div class="container">
    <h2>Bienvenido  <?php echo $_SESSION["loggedUserName"]; ?></h2>
    <p>
    <div class="card-panel">
    "Los ordenadores se hacen cada vez más inteligentes. Los científicos dicen que pronto ellos serán
    capaces de hablarnos (y con 'ellos' me refiero a los ordenadores, dudo mucho que los científicos sean capaces
    de hablarnos)"
    -- Dave Barry
    </div>
</div>    
<?php 
} else { ?>
    <p>
    <h3>Usted no se encuentra registrado en nuestros sistemas</h3>
    <?php 
}
?>