<?php

require_once 'autoload.php';

use TesteActions\PHP\Model\Funcionario;
use TesteActions\PHP\Pessoa;

$newCollaborator = new Pessoa('Diego Souza', '000.111.222.555-98');

$newCollaborator2 = new Funcionario('Diego', '999.858.727-85', 'Software Engineer', 5000);

echo $newCollaborator->getNome() . PHP_EOL;
echo $newCollaborator2->getSalario() . PHP_EOL;
echo $newCollaborator2->getCargo() . PHP_EOL;