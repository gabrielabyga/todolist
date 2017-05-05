<?php
    session_start();
    $_SESSION['atividades'][] = $_GET['atividade'];
    $_SESSION['login'] =
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="get" action="">
        <input type="text" name="atividade" placeholder="Ex.:Lavar o Boby.">
        <input type="submit" value="cadastrar">
    </form>

    <h2> Lista de Atividades: </h2>

    <ol>
        <?php foreach ($_SESSION['atividades'] as $ativ ): ?>
            <li><?= $ativ ?></li>
        <?php  endforeach; ?>
    </ol>

</body>
</html>

