<?php
class Class01
{

    private $nome;
    private $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
}

?>