<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor};


$umFuncionario = new Desenvolvedor(
    'Gian Lucas',
    new CPF('862.527.800-06'),
    1000
);

$umaFuncionaria = new Gerente(
    'Larissa Vitoria',
    new CPF('862.527.800-07'),
    4000
);

$umDiretor = new Diretor(
    'Einstein',
    new CPF('862.527.800-08'),
    8000
);
$umFuncionario->sobeDeNivel();

$umEditor = new Diretor(
    'Paulo',
    new CPF('862.527.800-09'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionaria);
$controlador->adicionaBonificacao($umDiretor);

echo $controlador->recuperaTotal();
