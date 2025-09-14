<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>resultado formulario</h1>
    </header>
    <main>
        <?php
            $nome = $_POST["nome"] ?: "sem nome";
            $sn = $_POST["sobrenome"] ?: "desconhecido";
            echo "<p> é um prazer te receber, $nome $sn </p>"
            ?>
            <p><a href="javascript:history.go(-1)">voltar a pagina anterior</a></p>
    </main>
</body>
</html>