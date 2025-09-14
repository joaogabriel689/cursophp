<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numero aleatorio</title>
    <link rel="stylesheet" href="C:\xampp\htdocs\cursophp\style\style.css">
</head>
<body>
    <header>
        <h1>gerar numero aleatorio de 1 a 100</h1>
    </header>
    <section>
        <?php
        $num = mt_rand(1, 100);
        echo "<P> o numero gerado é <strong>$num</strong></p>";
        ?>

        <form  method="post">
            <input type="submit" value="gerar novo numero">
        </form>
    </section>
</body>
</html>