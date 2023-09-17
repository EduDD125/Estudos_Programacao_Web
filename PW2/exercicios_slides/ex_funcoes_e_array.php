<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios Funções e Arrays</title>
</head>
<body>

    const CPF = [1,1,1,4,4,4,7,7,7];
    
    function calculatingFirstDV (CPF){
        $multiplierValues =[10, 9, 8, 7, 6, 5, 4, 3, 2];
        $numbersToBeSummated = [];

        for ($i=0 ; $i<9; $i++) {
            $numbersToBeSummated[$i] = CPF[$i] *  $multiplierValues[$i];
        }

        $numberOfSummation = 0;
        foreach($numbersToBeSummated as $value){
            $numberOfSummation = $numberOfSummation + $value;
        }

    }

    caculteDV (CPF);


</body>
</html>