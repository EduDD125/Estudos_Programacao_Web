<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
          $valor_digitado = $_GET["nome"];
          echo "<p>SEja bem-vindo $valor_digite</p>"  
    ?>

    <form action="receber.php" method="GET">
        <p>Digite seu nome</p>
        <input type="text" name="nome">
        <button>Enviar</button>
    </form>

    <?php
            /*  Tratamento de Exceção



    try {
        echo "A";
        if (false) {
            throw new Exception("Not found", 404);
        }
        echo "B";
    } catch (Exception $e) {
        
        echo $e->getMessage();
        exit;

    } finally {

    }
    */
    ?>


</body>
</html>