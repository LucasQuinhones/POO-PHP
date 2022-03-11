<?php

use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('862.527.800-06'),
        'Gian Lucas',
        new Endereco('Porto Alegre', 'Alto Petropolis', 'Rua Amadeu', '65')
    )
);

$conta->deposita(500);
$conta->saca(100);
echo $conta->recuperaSaldo();