<?php
require_once 'Calculadora.php';

$calcula = new Calculadora;
$notas = [9, 10, 5, 3, 5.7];

$media = $calcula->calculaMedia($notas);

echo "<p>A nota de Português é $notas[0]</p>";

echo "<p>A média é $media</p>";

