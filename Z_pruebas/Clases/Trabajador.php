<?php
declare(strict_types=1);


class Trabajador
{
    private int $id;
    private string $nombre;
    private int $edad;

    private double $sueldo;


    public function __construct(int $id, string $nombre, int $edad)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void

    {
        $this->nombre = $nombre;
    }

    public function getEdad(): int

    {
        return $this->edad;
    }

    public function setEdad(int $edad): void

    {
        $this->edad = $edad;
    }

}