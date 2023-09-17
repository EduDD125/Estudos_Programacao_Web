<?php

class Coordenador{
    private $nome;
    private $turmas = array();

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function addTurma($turma) {
        $this->turmas[] = $turma;
    }
    public function avaliarTurmas() {
        foreach ($this->turmas as $turma) {
            $alunos = $turma->getAlunos();
            $count = 0;
            foreach ($alunos as $aluno) {
                if ($aluno->getNota() < 6) {
                    echo "Aluno: ".$aluno->getNome()." | Nota: ".$aluno->getNota(). "<br>";
                    $count++;
                }
            }
            echo "Quantidade de alunos na turma" . $turma->getNome() . "com notas abaixo de 6: " . $count . "<br><br>";
        }
    }
}

?>