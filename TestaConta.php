<?php
declare(strict_types=1);
require 'Conta.php';

$conta = new Conta();
//
$conta->numero=500;
echo "\n\tSaldo Ini: $conta->saldo". PHP_EOL;

$conta->deposita(2000);
echo "\n\tSaldo: $conta->saldo".PHP_EOL;

//
$conta->saca(500);
$conta->consultaSaldo();
$conta->imprimeExtrato();


?>
