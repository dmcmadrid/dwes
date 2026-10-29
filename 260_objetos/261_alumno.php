<?php
declare (strict_types=1);


class Alumno
{
    public string $nombre;
    public float $nota;

    public function resumen(): string
    {
        return $this->nombre . " - " . $this->nota;
    }
}

$a1 = new Alumno();
$a1 -> nombre = "Ana";
$a1 -> nota = 7.5;

$a2 = new Alumno();
$a2 -> nombre = "Luis";
$a2 -> nota = 5.0;

echo $a1 -> resumen() . "<br>";
echo $a2 -> resumen() . "<br>";
echo "<p></p>";
echo "<h1></h1>";
echo "<div></div>";
echo "<h6></h6>";

// Cambio la nota de un alumno
$a1 -> nota = 9.0;

echo "<br><br>Después del cambio:<br>";
echo $a1->resumen() . "<br>";
echo $a2->resumen() . "<br>";
