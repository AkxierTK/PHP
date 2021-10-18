<?php

declare(strict_types=1);

class Persona
{
    private string $nombre;
    private string $apellidos;
    private int $edad;
   

    public function __construct($nom, $apellid,$edad)
    {
        $this->nombre = $nom;
        $this->apellidos = $apellid;
        $this->edad=$edad;
    }


    //Getters y Setters

    public function getEdad():int{
        return $this->edad;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    //metodos
    public function getNombreCompleto(): string
    {
        $nombreCompleto = $this->nombre . " " . $this->apellidos;
        return $nombreCompleto;
    }
    public static function toHtml(Persona $per): string
    {
        $cadena="<p>".$per->getNombreCompleto()."</p><br><p>".$per->getEdad()."</p>";
        return $cadena;
    }

}

$persona = new Empleado("Aitor", "TortillaConCebolla", 30000);
echo $persona->getNombre();
echo "<br>";
echo $persona->getNombreCompleto();
echo "<br>";
$deber = $persona->debePagarImpuestos();
?>
