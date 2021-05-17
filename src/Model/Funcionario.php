<?php

namespace TesteActions\PHP\Model;

use TesteActions\PHP\Pessoa;

class Funcionario extends Pessoa
{
    protected string $cargo;
    protected float $salario;

    public function __construct(string $cargo, float $salario)
    {
        // parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getCargo(): string 
    {
        return $this->cargo;
    }

    public function getSalario(): float 
    {
        return $this->salario;
    }

    public function alteraNome(string $nome): void 
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
}

