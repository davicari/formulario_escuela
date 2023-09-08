<?php



class ProductoTipo{

    public $Id;
    public $Nombre;


    function __construct($id,$nombre)
    {
        $this->Id = $id;
        $this->Nombre = $nombre;
    }

}


class Contacto{


    public $Id;
    public $Nombre;
    public $Email;
    public $Mensaje;
    public $ProductoTipo;
    public $FechaCreacion;


}