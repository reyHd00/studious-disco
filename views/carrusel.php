<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrusel</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <!-- JQUERY -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>

<body>
    <!--encabezado-->
   
    <!-- container -->
    <div class="container">
        <h3>Historia del arte</h3>
        <div class="carousel" id="demo-carousel">
            <a class="carousel-item" href="#one!"><img
                    src="https://historia.nationalgeographic.com.es/medio/2020/05/12/las-meninas-1_aafe3c4f_672x767.jpg"></a>
            <a class="carousel-item" href="#two!"><img
                    src="https://historia.nationalgeographic.com.es/medio/2019/06/26/04-soberano-musulman_820760c0_480x682.jpg"></a>
            <a class="carousel-item" href="#three!"><img
                    src="https://historia.nationalgeographic.com.es/medio/2019/07/16/04-estatuilla-madera-sarawak-raja-james-brooke_ecb30dc9_459x800.jpg"></a>
            <a class="carousel-item" href="#four!"><img
                    src="https://historia.nationalgeographic.com.es/medio/2019/04/10/escena-de-suicidio-grabado-ingles-siglo-xviii_bc561798_533x799.jpg"></a>
            <a class="carousel-item" href="#five!"><img
                    src="https://historia.nationalgeographic.com.es/medio/2019/03/28/17-duquesa-de-alba-goya_cd6e7ae4_525x800.jpg"></a>
        </div>
    </div>

    <!--Pie de pagina-->
    
     <script>
        $(document).ready(function () {
            $('#demo-carousel').carousel();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</body>
</html>