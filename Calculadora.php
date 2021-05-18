<?php

class Calculadora 
{
    public function calculaMedia(array $notas): ?float 
    {
        $qtdNotas = sizeof($notas); // guardando na variavel a quantidade de posições do array;
        if ($qtdNotas !== 0) {
            $soma = 0;
            for ($i=0; $i < $qtdNotas; $i++) { 
                $soma = $soma + $notas[$i];
            }
            $media = $soma / $qtdNotas;

            return $media;
        } 
        return null;
    }
}