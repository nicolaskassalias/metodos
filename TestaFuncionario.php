<?php
declare(strict_types=1);
require 'Funcionario01.php';

$func = new Funcionario();
//
$func->nome = "Maria da Silva";
$func->aumentaSalario(2000);
$func->consultaDados();



?>
