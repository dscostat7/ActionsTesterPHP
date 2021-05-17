<?php

require_once 'autoload.php';

use TesteActions\PHP\Model\Funcionario;
use TesteActions\PHP\Pessoa;

$newCollaborator = new Pessoa('Diego Souza', '000.111.222.555-98');

$newCollaborator2 = new Funcionario('Developer', 3000);

echo $newCollaborator->getNome() . PHP_EOL;
echo $newCollaborator2->getSalario() . PHP_EOL;