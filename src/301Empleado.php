<?php
declare(strict_types=1);

class Empleado{
    private string $nombre;
    private string $apellidos;
    private int $sueldo;

    public function getNombreCompleto():string{
        $nombreCompleto=$this->nombre." ". $this->apellidos;
        return $nombreCompleto;
    }

    public function debePagarImpuestos():bool{
        $deber=false;
        if($this->sueldo>3333){
            $deber=true;
        }
        return $deber;
    }

    public function setNombre($nom){
        $this->nombre=$nom;
    }

    public function setApellidos($apell){
        $this->apellidos=$apell;
    }
    public function setSueldo($sueld){
        $this->sueldo=$sueld;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function getApellidos():string{
        return $this->apellidos;
    }

    public function getSueldo():int{
        return $this->sueldo;
    }

}

$empleado= new Empleado();

$empleado->setNombre("Aitor");
$empleado->setApellidos("Tortilla ConCebolla");
$empleado->setSueldo(2000);
echo $empleado->getNombre();
echo "<br>";
echo $empleado->getNombreCompleto();
echo "<br>";
echo $empleado->debePagarImpuestos();