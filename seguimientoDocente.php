<?php session_start();

<<<<<<< HEAD
if (isset($_SESSION['usuario'])) {
    require_once("db/db.php");
//Llamada al modelo
    require_once("models/seguimientodocente.php");
    //cargado el modelo
    $seguimientoDocente = new seguimientodocente_model();

    $arregloDocentes = $seguimientoDocente->get_docentes();

    $arregloDocentesRoles = $seguimientoDocente->get_docente_rol();
//Llamada a la vista
    require_once("views/rptSegumientoDocente.view.php");
} else {
    header('Location: login.php');
} ?>
=======
if (isset($_SESSION['usuario'])){
    require 'views/seguimiento.view.php';
} else {
    header('Location: login.php');
}
>>>>>>> 92de8016442de1d754cf6fb690403f09f5cccddb
