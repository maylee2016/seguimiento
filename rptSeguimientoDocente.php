<?php session_start();

if (isset($_SESSION['usuario'])){

    //$nombre="imprimir";
    ///$apellido="perez";
    require 'views/rptSegumientoDocente.view.php';
} else {
    header('Location: login.php');
}

$bd="bd_seguimiento";
$conexion=mysqli_connect("localhost", "root", "", "bd_seguimiento");


mysqli_select_db($conexion,$bd);
///$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result = mysqli_query($conexion, "SELECT NOMBRE_DOC, APELLPA_DOC, APELLMA_DOC, CI_DOC, EXPEDIDO_CI_DOC, NOMBRE_ROL 
                                   FROM docente d, rol r
                                   INNER JOIN d.ID_DOC=r.iD.ROL
                                   ON 
                                 ");
mysqli_data_seek ($result,1);
$extraido= mysqli_fetch_array($result);
echo "Nombre: ".$extraido['NOMBRE_DOC']."<br/>";
echo "Apellido Paterno: ".$extraido['APELLPA_DOC']."<br/>";
echo "Apellido Materno: ".$extraido['APELLMA_DOC']."<br/>";
echo "CI.: ".$extraido['CI_DOC']." ".$extraido['EXPEDIDO_CI_DOC']." <br/>";
echo "Rol ".$extraido['NOMBRE_ROL']."<br/>";

mysqli_free_result($result);

mysqli_close($conexion);
?>

