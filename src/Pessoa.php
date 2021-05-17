<?php

namespace TesteActions\PHP;

class Pessoa
{
    protected $nome;
    protected $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->validaNome($nome);
    }

    public function getNome(): string 
    {
        return $this->nome;
    }

    public function getCpf(): string 
    {
        return $this->cpf;
    }

    final protected function validaNome(string $nomeP)
    {
        if (strlen($nomeP) <= 2) {
            echo "O campo nome deve conter no mínimo 3 (Três) caracteres!" . PHP_EOL;
            exit();
        }

    }
}