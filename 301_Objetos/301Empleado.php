<?php

declare(strict_types=1);

class Empleado
{

    private string $nombre;
    private string $apellidos;
    private float $sueldo;

    public function __construct(string $nombre, string $apellidos, float $sueldo)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }


    public function getNombreCompleto(): string
    {
        return $this->getNombre() . " " . $this->getApellidos();
    }



    public function debePagarImpuestos(): bool
    {
        $pagar = false;

        if ($this->sueldo > 3333) {
            $pagar = true;
        }
        return $pagar;
    }



    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getApellidos(): string
    {
        return $this->apellidos;
    }
    public function getSueldo(): float
    {
        return $this->sueldo;
    }



    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function setApellidos(string $apellidos): void
    {
        $this->apellidos = $apellidos;
    }
    public function setSueldo(float $sueldo): void
    {
        $this->sueldo = $sueldo;
    }
}


$c = new Empleado("María", "Mendez Pelayo", 1114.45);


echo $c->getNombreCompleto() . "<br>Su sueldo es: " . $c->getSueldo();

echo "<br><br><br>";

echo ($c->debePagarImpuestos()) ? "Sí que pagar Impuestos" : " No paga Impuestos";


