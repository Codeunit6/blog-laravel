<?php
namespace App\Models;

class Universidad
{

    public $nombre;
    public $ciudad;
    public $pais;
    public $estado;
    public $apodo = "Colmillos X2";

    public function mostrarAlumnos(){
        $alumnos = ["Juan", "Pedro", "Ana", "Maria"];
        return $alumnos;
    }


    public function llenar(){
        $this->nombre = "Universidad de Guadalajara";
        $this->ciudad = "Guadalajara";
        $this->pais = "Mexico";
        $this->estado = "Jalisco";
    }


}
