<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salarios</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php 
    $sal = $_REQUEST["sal"] ?? 0;
    ?>
    <main>
        <h1>qual o seu salario?</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get"></form>
        <input type="number" name="sal" id="sal" value="<?=$sal?>">
        <input type="submit" value="enviar">
    </main>
    <section>
        <?php 
        $sal = str_replace(",", ".", $sal);


        // Converte para float e divide por 1380

        $salsm = intdiv((float)$sal, 1380);

        $resta = $sal - ($salsm * 1380);

        echo "$salsm e $resta"


        
        
        ?>
    </section>
    
</body>
</html>