<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estudos em casa</title>
</head>
<body>
    <?php
    $dividendo = 10;
    $divisor = 1;

    function dividir($dividendo, $divisor) {
        if($divisor == 0) {
            throw new Exception ("Divisão por zero!");
        }
        return $dividendo/$divisor;
    }

    try{
        echo "<p>Olá</p>";
        echo dividir($dividendo, $divisor) . "<br>";
    } catch (Exception $e) {
        echo"<p>Ocorreu o erro: ". $e->getMessage() . "</p>";
    } finally {
        echo "<p>Biluuuuuuuuuuuuu</p>";
    }
    
    /*        Criando classe de Exceção customizada
    class ExcecaoCustomizada extends Exception {
        public function __construct($msg, $code=0, $anterior=null) {
            parent::__construct($msg, $code, $anterior);
        }
        #acrescentar outros métodos
    }
    */
    
    
    ?>
</body>
</html>