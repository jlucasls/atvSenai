<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        if($usuario == "admin"){
            if($senha == "123"){
                echo("Login efetuado com sucesso");
            }else{
                echo("Login ou senha incorreta");
            }
        }else{
            echo("Login ou senha incorreta");
        }

    ?>
</body>
</html>