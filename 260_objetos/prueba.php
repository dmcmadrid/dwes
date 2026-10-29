<?php

class Producto {
    public string $nombre;
}

$p1 = new Producto();
$p1->nombre = 'Teclado';

$p2 = new Producto();
$p2->nombre = 'Monitor';

echo $p1->nombre; // Teclado