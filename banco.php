<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$funcionario = new Alura\Banco\Modelo\Funcionario\Desenvolvedor(
    'Lucas',
    new CPF('862.527.800-06'),
    2000
);

echo $funcionario->nome;