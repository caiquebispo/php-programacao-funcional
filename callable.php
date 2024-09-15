<?php

$dados = require 'dados.php';

function convertPaisParaLetraMaiuscaula(array $pais): array
{
    $pais['pais'] = mb_convert_case($pais['pais'], MB_CASE_UPPER);
    return $pais;
}

$dados = array_map('convertPaisParaLetraMaiuscaula', $dados);

var_dump($dados);
