<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Transaçao entre contas</title>
</head>
<body>
    <pre>
    <?php

        include_once "ContaBancaria.php";
        echo "<br>";
        $conta01 = new ContaBancaria(); // Matheus
        $conta01->setNumConta(58215);
        $conta01->abrirConta("CC");
        $conta01->setDono("Matheus");
        echo "<br>";
        $conta02 = new ContaBancaria(); // Alcineia
        $conta02->setNumConta(96887);
        $conta02->abrirConta("CP");
        $conta02->setDono("Alcineia");
        echo "<br>";

        $conta01->depositar(50);
        $conta02->depositar(100);

        $conta01->transferir(50,$conta02);
        print_r($conta01);
        print_r($conta02);

    ?>
    </pre>
</body>
</html>