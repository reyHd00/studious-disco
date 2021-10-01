
<!--contenedor-->
<div class="container">
          
    <div class="row">
       
        <div class="col s12 m6 offset-m4">
            <h1 class="center-align">Iniciar sesion</h1>
        </div>
        <div class="col s12 m6 offset-m4">
            <?php
            $estado_session = session_status();
            if($estado_session == PHP_SESSION_NONE){
                session_start();
            }
            if (isset($_SESSION['loggedUserName'])) {
                ?>
                <h3>No tiene permisos para entrar a la página <h3>
                <?php
            }else {
                ?>
                <br />
                <form action="./controller/login.php" method="post">
                    <div class="row card-panel z-depth-4">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" id="usuario" name="usuario" class="validate" placeholder="Usuario:"
                                required />
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">fingerprint</i>
                            <input type="password" id="password" name="password" class="validate" placeholder="Contraseña:"
                                required />
                        </div>
                        <button class="btn blue right">
                            <i class="material-icons left">login</i>
                            Enviar
                        </button>
                    </div>
                </form>
                <?php 
            }?>
        </div>
    </div>
</div>
    <!-- pie de pagina -->
