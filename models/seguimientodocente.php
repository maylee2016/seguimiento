<?php

class seguimientodocente_model
{
    private $db;
    private $arDocentes;
    private $arregloDocentesRoles;

    public function __construct()
    {
        $this->db = db::conexion();
        $this->arDocentes = array();
        $this->arregloDocentesRoles = array();
    }

    public function get_docentes()
    {
        $consulta = $this->db->query("select * from docente;");
        while ($filas = $consulta->fetch_assoc()) {
            $this->arDocentes[] = $filas;
        }
        return $this->arDocentes;
    }

    public function get_docente_rol()
    {
        $consulta_sql="select * from docente d join rol r on d.ID_ROL=r.ID_ROL ";
        $consulta =$this->db->query($consulta_sql);
        while ($filas = $consulta->fetch_assoc()) {
            $this->arregloDocentesRoles[] = $filas;
        }
        return $this->arregloDocentesRoles;
    }
}

?>