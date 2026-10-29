<?php
declare(strict_types=1);

class CuentaBancaria
{
    private string $titular;
    private float $saldo;

    public function __construct(string $titular, float $saldo)
    {
        if ($saldo >= 0) {
            $this->titular = $titular;
            $this->saldo = $saldo;
        }else{
            $saldo = 0;
        }
    }

    public function ingresar(float $cantidad): void
    {
        if ($cantidad > 0) {
            $this->saldo += $cantidad;
        }
    }

    public function retirar(float $cantidad): void
    {
        if ($cantidad > 0 && $cantidad <= $this->saldo) {
            $this->saldo -= $cantidad;
        }
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function resumen(): string
    {
        return "Titular: " . $this->titular .
            " | Saldo: " . $this->saldo . " €";
    }
}



$cuenta1 = new CuentaBancaria("Juan", 1000);
$cuenta2 = new CuentaBancaria("Ana", 500);

echo $cuenta1->resumen() . "<br>";
echo $cuenta2->resumen() . "<br>";

$cuenta1->ingresar(250);
$cuenta1->retirar(100);

echo "<br>Después de operar:<br>";
echo $cuenta1->resumen() . "<br>";
echo $cuenta2->resumen();
