<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        date_default_timezone_set("America/sao_paulo");
        $nome = "joao";
        echo "meu nome é $nome";
     
        echo "hoje é dia" . date("d/M/Y");
        
        echo "hora" . date("G:i");  
    ?>
</body>
</html>