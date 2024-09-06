<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $menu = $_POST["menu"];
        $saldo = 100;
        $depositar = $_POST["deposito"];
        $sacar = $_POST["sacar"];
        $sair = $_POST["sair"] ?? "saldo";

        switch($menu){
            case($menu == "saldo"):
                echo($saldo);
                break;

                case($menu == "depositar"):
                    $saldo = $saldo + $depositar;
                    echo($saldo);
                    break;

                    case($menu == "sacar"):
                        $saldo = $saldo - $sacar;
                        echo($saldo);
                        break;

                        case($menu == "sair"):
                            echo("Voce saiu");
                            break;
        }

    ?>
</body>
</html>