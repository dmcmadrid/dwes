<?php
declare(strict_types=1);

namespace App\Dwes\Ejemplos;

const IVA = 0.21;

class Producto
{
    public string $nombre;

    public function muestra(): void
    {
        echo "<p>Prod: " . $this->nombre . "</p>";
    }
}