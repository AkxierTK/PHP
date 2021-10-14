<?php

declare(strict_types=1);

class Empleado
{
    private string $nombre;
    private string $apellidos;
    private int $sueldo;
    private array $telefonos=[];


    //Getters y Setters

    public function setNombre($nom)
    {
        $this->nombre = $nom;
    }

    public function setApellidos($apell)
    {
        $this->apellidos = $apell;
    }
    public function setSueldo($sueld)
    {
        $this->sueldo = $sueld;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function getSueldo(): int
    {
        return $this->sueldo;
    }

    //metodos
    public function getNombreCompleto(): string
    {
        $nombreCompleto = $this->nombre . " " . $this->apellidos;
        return $nombreCompleto;
    }

    public function debePagarImpuestos(): bool
    {
        $deber = false;
        if ($this->sueldo > 3333) {
            $deber = true;
        }
        return $deber;
    }

    public function anyadirTelefono(int $telefono)
    {
        array_push($this->telefonos, $telefono);
    }

    public function listarTelefonos(): string
    {
        return implode(",",$this->telefonos);
    }

    public function vaciarTelefonos()
    {
        $numeros = [];
        $this->telefonos = $numeros;
    }
}

$empleado = new Empleado();

$empleado->setNombre("Aitor");
$empleado->setApellidos("Tortilla ConCebolla");
$empleado->setSueldo(2000);
echo $empleado->getNombre();
echo "<br>";
echo $empleado->getNombreCompleto();
echo "<br>";
$deber = $empleado->debePagarImpuestos();


if ($deber == false) {
    echo "NO debe pagar";
} else {
    echo "Debe pagar";
}
echo "<br>";
$empleado->anyadirTelefono(666333);
$empleado->anyadirTelefono(11111111111);
$empleado->anyadirTelefono(222222222);
echo $empleado->listarTelefonos();
echo "<br>";
$empleado->vaciarTelefonos();
echo $empleado->listarTelefonos();
