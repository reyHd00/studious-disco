<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
</head>

<body>
    <!--encabezado-->
    
    <!-- contenedor -->
    <div class="container">
        <div>
            <h1 class="center-align">Registra tus datos</h1>
        </div>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <label for="first-name">Nombre:</label><br />
                        <input placeholder="Rimuro" id="first_name" type="text" class="validate" />
                    </div>
                    <div class="input-field col s6">
                        <label for="last_name">Apellidos:</label><br />
                        <input id="last_name" type="text" class="validate" placeholder="Tempest" />
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="email">Email</label><br />
                        <input id="email" type="email" class="validate" />
                        <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="password">Contraseña:</label><br />
                        <input id="password" type="password" class="validate" />
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" type="tel" class="validate" placeholder="Numero de telefono" />
                    </div>
                </div>
                <button class="btn blue right">
                    <i class="material-icons left">login</i>
                    Enviar
                </button>
            </form>
        </div>
    </div>

    <!--Pie de pagina-->
    
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>