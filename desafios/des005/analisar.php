<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>analisar</title>
    <link rel="stylesheet" href="../../style/style.css">

</head>
<body>
    <header>
        <h1>analise do numero real</h1>

    </header>
    <main>
        <?php 
        $num = $_REQUEST["numero"];

        $inteiro = number_format($num,0,",",".");

        $decimal = fmod($num, 1);
        $decimal = number_format($decimal,3,",",".");

        echo "<p>numero = $num</p>";

        echo "<p>inteiro = $inteiro</p>";

        echo "<p>decimal = $decimal</p>";

    


        
        ?>
    </main>
    
</body>
</html>