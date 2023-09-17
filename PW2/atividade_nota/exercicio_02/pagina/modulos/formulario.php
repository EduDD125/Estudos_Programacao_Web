<?php 

function imprimir_formulário(){
    echo "<form class=\"form\" method=\"POST\" action=\"index.php\">
            <label>Nome</label>
            <input type=\"text\" placeholder=\"Digite seu nome\" name=\"nome\">
            
            
            <label>Idade</label>
            <input type=\"number\" placeholder=\"Digite sua idade\" name=\"idade\">
            
            
            <label>E-mail</label>
            <input type=\"text\" placeholder=\"Digite seu e-mail\" name=\"email\">
            
            
            <label>Estado civil</label>
            <select name=\"estadoCivil\">
                <option value=\"0\">Solteiro</option>
                <option value=\"1\">Casado</option>
                <option value=\"2\">Viúvo</option>
            </select>
            
            
            <label>O que você gostaria de comer hoje?</label>
                <label>
                    <input type=\"checkbox\" name=\"comida[]\" value=\"0\"> Crazy Burger
                </label>
                <label>
                    <input type=\"checkbox\" name=\"comida[]\" value=\"1\"> Salad Burger
                </label>
                <label>
                    <input type=\"checkbox\" value=\"2\" name=\"comida[]\"> The Final Burger
                </label>
                <label>
                    <input type=\"checkbox\" value=\"3\" name=\"comida[]\"> Batatas Explozivas
                </label>
                <label>
                    <input type=\"checkbox\" value=\"4\" name=\"comida[]\"> BBC - batata, bacon, cheddar
                </label>
                <label>
                    <input type=\"checkbox\" value=\"5\" name=\"comida[]\"> Onion Rings
                </label>
            
                <label>Forma</label>
                    <label>
                        <input type=\"radio\" name=\"forma\" value=\"0\">Entrega
                    </label>
                    <label>
                        <input type=\"radio\" name=\"forma\" value=\"1\">Buscar
                    </label>
                
                <button>Finalizar pedido</button>
        </form>";

        $erro = false;
        if(trim($_POST["nome"]) == ""){
            throw new Exception("Sem nome");
            $erro = true;
        }
        else if(strlen(trim($_POST["nome"])) <= 4 || strlen(trim($_POST["nome"])) >= 10) {
            throw new Exception("Tamanho de nome incorreto") ;
            $erro = true;
        }

        
    
    
        if(isset($_POST["nome"]) && !$erro){
            include_once "imprimir_dados_form.php";
        }
    }

        // tratamentos de erro
    try {
        imprimir_formulário();
    } catch (Exception $e) {
        echo "<p>ocorreu erro: " . $e->getMessage() . "</p>";
    }

?>