<?php
declare(strict_types=1);

namespace App\Dwes\Ejemplos;

require_once 'Dwes/Ejemplos/Producto.php';

echo IVA . "<br>";                          // sin cualificar
echo \App\Dwes\Ejemplos\IVA . "<br>";       // totalmente cualificado

$p1 = new Producto();                       // sin cualificar
$p1->nombre = "Teclado";
$p1->muestra();

$p3 = new \App\Dwes\Ejemplos\Producto();    // totalmente cualificado
$p3->nombre = "Ratón";
$p3->muestra();