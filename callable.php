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

function totalDeMeDalhasDoPais(int $medalhasAcumulada, int $medalha): int
{
    return  $medalhasAcumulada += $medalha;
}
function totalDeMedalhas(int $medalhasAcumulada, array $pais): int
{

    return  $medalhasAcumulada += array_reduce($pais['medalhas'], 'totalDeMeDalhasDoPais', 0);
}

$medalhas = array_reduce(
    array_map(function ($medalhas) {

        return array_reduce($medalhas, 'totalDeMeDalhasDoPais', 0);
    }, array_column($dados, 'medalhas')),
    'totalDeMeDalhasDoPais',
    0
);
var_dump($medalhas);
