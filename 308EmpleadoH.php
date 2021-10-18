<?php
include("308PersonaH.php");
declare(strict_types=1);

use Empleado as GlobalEmpleado;

class Empleado extends Persona
{
    private int $sueldo;
    private array $telefonos;
    static private $SUELDO_TOPE = 2000;

    public function __construct(
        $nombre,
        $apellido,
        $suel = 1000
        )
    {   
        parent::__construct($nombre,$apellido);
        $this->sueldo = $suel;
        $this->telefonos = [];
    }


    //Getters y Setters

    public function getSueldo_Tope()
    {
        return self::$SUELDO_TOPE;
    }
    public function setSueldo_Tope(int $sueldoMax)
    {
        self::$SUELDO_TOPE = $sueldoMax;
    }
   
    public function getTelefonos(){
        return self::$telefonos;
    }

  

    public function getSueldo(): int
    {
        return $this->sueldo;
    }

    //metodos
    

    public function debePagarImpuestos(): bool
    {
        $deber = false;
        if ($this->sueldo > self::$SUELDO_TOPE) {
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
        return implode(",", $this->telefonos);
    }

    public function vaciarTelefonos()
    {
        $numeros = [];
        $this->telefonos = $numeros;
    }

    public static function toHtml(Persona $per): string
    {
        $cadena=parent::toHtml($per);
        if($per instanceof Empleado){
        $cadena.="<br><p>".$per->getSueldo()."</p><br>";
        $telefonosLista=$per->getTelefonos();
        foreach($telefonosLista as $telefono){
            $cadena.="<li>".$telefono."</li>";
        }
        $cadena.="</ol>";
    }
        return $cadena;
    }
}

$empleado = new Empleado("Aitor", "TortillaConCebolla", 30000);
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $empleado->toHtml($empleado)?>
</body>
</html>