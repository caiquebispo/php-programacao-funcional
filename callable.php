<?php

$variavel = "Isso é uma variavel que está no escopo exeterno do programa";

function outraFuncao(callable $fn)
{

    echo "Minha funcao princial";
    echo $fn();
}

outraFuncao(function () use ($variavel) {

    echo "Olá, eu estou usando uma variavél que está no contexto externo da minha aplicação por meio de uma closure " . $variavel;
});
