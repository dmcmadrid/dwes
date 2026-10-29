<?php

class LineaPedido
{
    private Producto $producto;   // la línea "tiene un" producto
    private int $cantidad;

    public function __construct(Producto $producto, int $cantidad)
    {
        $this->producto = $producto;
        $this->cantidad = $cantidad;
    }

    public function getProducto(): Producto { return $this->producto; }
    public function getCantidad(): int { return $this->cantidad; }
}

?>