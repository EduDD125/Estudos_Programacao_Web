<?php

class Aluno {
    private $nome;
    private $nota;

    public function __construct($nome, $nota) {
        $this->nome = $nome;
        $this->nota = $nota;
    }
    public function getNota() {
        return $this->nota;
    }
    public function setNota($nota) {
        $this->nota = $nota;
    }
    public function getNome() {
        return $this->nome;
    }
    
}

?>