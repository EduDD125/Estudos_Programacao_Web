<?php

class Turma{
    private $nome;
    private $alunos = array();
    
    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
    public function addAluno($aluno) {
        $this->alunos[] = $aluno;
    }
    public function getAlunos() {
        return $this->alunos;
    }
}

?>