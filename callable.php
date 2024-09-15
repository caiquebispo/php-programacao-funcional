<?php

$dados = require 'dados.php';

function convertPaisParaLetraMaiuscaula(array $pais): array
{
    $pais['pais'] = mb_convert_case($pais['pais'], MB_CASE_UPPER);
    return $pais;
}
function verificaSePaisTemEspacoNoNome(array $pais): bool
{

    return str_contains($pais['pais'], ' ');
}
$dados = array_map('convertPaisParaLetraMaiuscaula', $dados);

$dados = array_filter($dados, 'verificaSePaisTemEspacoNoNome');

var_dump($dados);
