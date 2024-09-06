<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nota = $_POST["number"];

        switch($nota){
            case($nota == 10):
                echo("A");
                break;

                case($nota == 9):
                    echo("B");
                    break;

                    case($nota >= 7 && $nota <= 8):
                        echo("C");
                        break;

                        case($nota >=5 && $nota <=6):
                            echo("D");
                            break;

                           default:
                           echo("F");
        }
    ?>
</body>
</html>