<?php session_start();
<<<<<<< HEAD
=======
    require 'views/cargos.view.php';
>>>>>>> 92de8016442de1d754cf6fb690403f09f5cccddb
    require 'funciones.php';
    if ($_SESSION['usuario']){
        //print_r($_SESSION['privilegio']);
        $conexion = conexion('bd_seguimiento','root','');
        if (!$conexion) {
            die();
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nomRol         = $_POST['nomRol'];
            $descripcion    = $_POST['descrip'];
            $nombreTarea    = $_POST['nomTar'];
            $tipoRol        =$_POST['tipoRol'];

            $statement = $conexion->prepare('INSERT INTO rol ( ID_ROL, NOMBRE_ROL, DESCRIPCION_ROL, TIPO_ROL, NOMBRE_TAREA) 
                                          VALUES (
                                              null, :nombreRol,:descripcion, :tipoRol,:nombreTarea
                                          )');
            $statement->execute(array(
                ':nombreRol'=>$nomRol,
                ':descripcion'=>$descripcion,
                ':tipoRol'=>$tipoRol,
                ':nombreTarea'=>$nombreTarea
            ));
            $conexion->closeCursor();

        }
        $statement = $conexion->prepare("SELECT NOMBRE_ROL, DESCRIPCION_ROL FROM rol ");
        $statement->execute();
        $roles = $statement->fetchAll();

<<<<<<< HEAD

        require 'views/cargos.view.php';
=======
>>>>>>> 92de8016442de1d754cf6fb690403f09f5cccddb
    } else {
        header('Location: index.php');
    }

?>	