<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema De Apoyo</title>

    <!--INICIO BOOTSTRAP FONT-AWESOME-->
    <link rel="stylesheet" href="estilos/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="estilos/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="estilos/fonts/font-awesome/css/font-awesome.min.css">
    <!--FIN BOOTSTRAP FONT-AWESOME-->

    <!--INICIO HOJAS DE ESTILO-->
    <link rel="stylesheet" type="text/css" href="estilos/css/menu.css">

    <link rel="stylesheet" type="text/css" href="estilos/css/plantelDocente.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/registroDocentes.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/vistaPrincipal.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/listaUsuarios.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/cargos.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/btnGlobal.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/editarPerfil.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/seguimiento.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/nombramiento.css">
<<<<<<< HEAD
    <!--FIN HOJAS DE ESTILO-->

    <!---->
=======
    <link rel="stylesheet" type="text/css" href="estilos/css/registroMaterias.css">
    <!--FIN HOJAS DE ESTILO-->
>>>>>>> 92de8016442de1d754cf6fb690403f09f5cccddb

    <!--INICIO JAVA SCRIPT-->
    <link rel="stylesheet" href="estilos/css/jquery-ui.css">    
    <script src="estilos/js/jquery.min.js"></script>
    <script src="estilos/js/jquery-ui.min.js"></script>
    <script src="estilos/js/moment.js"></script>
<<<<<<< HEAD
    <script src="estilos/js/timer.js"></script>
=======
    
    <script src="estilos/js/timer.js"></script>
    <script src="estilos/js/buscaMaterias.js"></script>
    <script src="estilos/js/buscarDocente.js"></script>
    <script src="estilos/js/buscarDocente/obtener.js"></script>
    <!--FIN JAVA SCRIPT-->
>>>>>>> 92de8016442de1d754cf6fb690403f09f5cccddb


    <script>
        $('document').ready(function () {
            function hora() {
                $.ajax({
                    type: 'GET',
                    url: 'funciones.php',
                    success: function ($hora) {
                        $('#hora').html($hora);
                        setTimeout(hora(),1000);
                    }
                });
            }
            setTimeout(hora(),1000);
        });
    </script>
</head>
