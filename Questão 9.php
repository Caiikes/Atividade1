<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 – Exercícios PHP</title>
    <link rel="stylesheet" href="Atividade 1.css">

    <?php
    function Imprimir($Numero_de_Vezes)
    {
        for ($ck = 0; $ck < $Numero_de_Vezes; $ck++) {
            echo ($ck + 1) . " - SOL<br>";
        }
    }
    ?>

</head>


<body align="center">

    <div class="Questoes">Questão 9</div>

    <?php
    $Numero_de_Vezes = 13;
    Imprimir($Numero_de_Vezes);
    ?>

</body>

</html>