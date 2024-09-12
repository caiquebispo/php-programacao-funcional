<?php

function outraFuncao(callable $fn)
{

    echo "Minha funcao princial";
    echo $fn();
}

outraFuncao(function () {

    echo "Minha segunda funcao";
});
