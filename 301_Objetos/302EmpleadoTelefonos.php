<?php

declare(strict_types=1);

class Empleado
{

    private string $nombre;
    private string $apellidos;
    private float $sueldo;
    private array $telefonos = [];

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

    public function anyadirTelefono(int $telefono): void
    {
        $this->telefonos[] = $telefono;
    }


    public function listarTelefonos(): string 
    {
        $telefonos = "";

        foreach($this->telefonos as $t){

            $telefonos = $telefonos.$t.", ";
        }

        return $telefonos;
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


$e = new Empleado("Nombre 1","Apellido 1",1545.45);

$e->anyadirTelefono(111111111111);
$e->anyadirTelefono(2222222222222);
$e->anyadirTelefono(3333333333);


echo "Lista de telefonos del Empleado ".$e->getNombreCompleto().": ".$e->listarTelefonos();
