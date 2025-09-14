<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valor convertido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>valor convertido</h1>
    </header>
    <main>
        <?php
        $coeficiente = 5.36;
        $valor_real = $_REQUEST["reais"];
        $valor_dolar = $valor_real * $coeficiente;
        echo "seus R$ $valor_real sao U$ $valor_dolar"; 
        ?>
    </main>
</body>
</html>