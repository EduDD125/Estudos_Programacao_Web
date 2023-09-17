<?php
    include_once "index.php";

    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
        echo $nome;
    }
?>