<?php
if(!isset($_GET['var_js']) || empty($_GET['var_js'])){
    echo "Error!!!";
} else{
    echo "Exito!!!";
    $idDocente = $_GET['var_js'];
    print_r($idDocente);
}
