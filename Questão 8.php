<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 – Exercícios PHP</title>
    <link rel="stylesheet" href="Atividade 1.css">

    <?php
    function Imprimir($Numero)
    {
        $ck = 1;
        $produto = 1;

        do {
            echo "$ck - Produto: $produto<br>";
            $produto *= $ck;
            $ck++;
        } while ($ck <= $Numero);
    }
    ?>

</head>

<body align="center">
    <div class="Questoes">Questão 8</div>

    <?php
    $Numero = 15;
    Imprimir($Numero);
    ?>

</body>

</html>