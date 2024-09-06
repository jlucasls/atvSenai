<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idade = $_POST["idade"];

        if($idade < 18){
            echo("Idade minima de 18 anos necessario. Acesso negado!");
        }else{
            echo("Acesso permitido");
        }
    ?>
</body>
</html>