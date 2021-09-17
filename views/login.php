<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
</head>

<body>
    <!--encabezado-->

    <!--contenedor-->
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m4">
                <h1 class="center-align">Iniciar sesion</h1>
            </div>
            <div class="col s12 m6 offset-m4">
                <form action="index.html" method="get">
                    <div class="row card-panel z-depth-4">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" id="usuario" name="usuario" class="validate" placeholder="Usuario:"
                                required />
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">fingerprint</i>
                            <input type="password" id="pswd" name="pswd" class="validate" placeholder="Contraseña:"
                                required />
                        </div>
                        <button class="btn blue right">
                            <i class="material-icons left">login</i>
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- pie de pagina -->

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>