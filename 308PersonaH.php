<?php

declare(strict_types=1);

class Persona
{
    private string $nombre;
    private string $apellidos;
   

    public function __construct($nom, $apellid,)
    {
        $this->nombre = $nom;
        $this->apellidos = $apellid;
    }


    //Getters y Setters

  
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
        $cadena="<p>".$per->getNombreCompleto()."</p>";
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
