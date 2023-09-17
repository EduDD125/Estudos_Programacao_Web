<?php

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $email = $_POST["email"];
        $estadoCivil = $_POST["estadoCivil"];
        $listaComida = $_POST["comida"];
        $forma = $_POST["forma"];

        echo "<br> <p>Nome: " . trim($nome) . "</p>";
        
        echo "<br> <p>Idade: " . trim($idade) . "</p>";   
        
        echo "<br> <p>E-Mail: " . trim($email) . "</p>"; 
        
        echo "<br> <p>Estado Civil: ";
        switch($estadoCivil) {
            case "0":
                echo " Solteiro.";
                break;
            case "1":
                echo " Casado.";
                break;
            case "2":
                echo " Viúvo.";
                break;
        } 
        echo "</p>"; 
        
        echo "<br> <p>Pedido:</p>";
        
        echo "<ul>"; 
        foreach($listaComida as $comida){
            if($comida == 0) echo "<li>Crazy Burger</li>";
            if($comida == 1) echo "<li>Salad Burger</li>";
            if($comida == 2) echo "<li>The Final Burger</li>";
            if($comida == 3) echo "<li>Batatas Explozivas</li>";
            if($comida == 4) echo "<li>BBC - batata, bacon, cheddar</li>";
            if($comida == 5)echo "<li>Onion Rings</li>";
        }
        echo "</ul>"; 

        echo "<br> <p>Forma de receber pedido: " . trim($forma) . "</p>";        
?>