<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo"
    <form method=\"POST\" action=\"teste.php\">
        <label>Nome:
            <input type=\"text\" name=\"nome\" required>
        </label>
        <button>Enviar</button>
    </form>
    ";
    
        include "teste.php";
    ?>

</body>

</html>