<?php session_start();

	if (isset($_SESSION['usuario'])){
        require 'views/registroDocente.view.php';
	} else {
		header('Location: login.php');
	}
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nombres         = $_POST['nombre'];
        $apellidoPaterno = $_POST['apePaterno'];
        $apellidoMaterno = $_POST['apeMaterno'];
<<<<<<< HEAD
        $titulo          =$_POST['profesion'];
=======
        $titulo          = $_POST['profesion'];
>>>>>>> 92de8016442de1d754cf6fb690403f09f5cccddb
        $ci              = $_POST['ci'];
        $expedido        = $_POST['departamento'];
        $fechaNacimiento = $_POST['fecNacimiento'];
        $sexo            = $_POST['sexo'];
        $telFijo         = $_POST['telf'];
        $celular         = $_POST['cel'];
        $direcDomicilio  = $_POST['direccion'];
        $correoElectronico=$_POST['correo'];
        $cargo            =$_POST['dedicacion'];

        $enlace = mysqli_connect("localhost", "root", "", "bd_seguimiento");

        if (!$enlace) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        } else {
            $query = "INSERT INTO docente(CI_DOC,NOMBRE_DOC,APELLPA_DOC,APELLMA_DOC,
                                            TITULO_DOC,FECHA_NACIMIENTO_DOC	,TELEFONO_DOC,CELULAR_DOC,EXPEDIDO_CI_DOC,
                                            CORREO_DOC,GENERO_DOC,DIRECCION_DOC,TIPO_DOC)
                       VALUES('$ci','$nombres','$apellidoPaterno','$apellidoMaterno','$titulo','$fechaNacimiento','$telFijo','$celular',
                                '$expedido','$correoElectronico','$sexo','$direcDomicilio','$cargo')";
            mysqli_query($enlace,$query);
        }
        mysqli_close($enlace);
    }
?>