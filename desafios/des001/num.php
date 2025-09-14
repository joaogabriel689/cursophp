<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="C:\xampp\htdocs\cursophp\style\style.css">
</head>
<body>
    <header>
        <h1>resultado</h1>
    </header>
    <main>
        <?php
        $num = $_REQUEST["numero"];
        $antecessor = $num - 1;
        $sucessor = $num + 1;
        echo "o numero é $num";
        echo "o antecesor é $antecessor";
        echo "o sucessor é $sucessor";

        ?>
    </main>
</body>
</html>