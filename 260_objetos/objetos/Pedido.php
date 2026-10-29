<?php

class Pedido
{
    private array $lineas = [];   // el pedido "tiene muchas" líneas



    public function agregarLinea(LineaPedido $linea): void
    {
        $this->lineas[] = $linea;
    }

    public function total(): float
    {
        // TODO: lo escribes tú
    }

    
}


?>