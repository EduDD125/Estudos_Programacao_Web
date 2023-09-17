<?php 

include_once "Aluno.php";
include_once "Turma.php";
include_once "Coordenador.php";

$coordenador = new Coordenador("Júlio César");

for($i=0; $i<3; $i++) {
    $turma = new Turma("0$i-A");
    for($j=0; $j<20; $j++) {
        $nota = mt_rand(0,100) / 10;
        $aluno = new Aluno ("$j", $nota);
        $turma->addAluno($aluno);
    }
    $coordenador->addTurma($turma);
}
$coordenador->avaliarTurmas();

?>
