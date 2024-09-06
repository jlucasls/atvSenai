<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = $_POST["number1"];
        $num2 = $_POST["number2"];
        $op = $_POST["op"];
        $soma;
        $sub;
        $mult;
        $div;

        switch($op){
            case($op == "soma"):
                $soma = $num1 + $num2;
                echo($soma);
                break;

                case($op == "sub"):
                    $sub = $num1 - $num2;
                    echo($sub);
                    break;
                     
                    case($op =="mult"):
                        $mult = $num1 * $num2;
                        echo($mult);
                        break;

                    case($op == "div"):
                       if($num1 < $num2){
                            echo("divisao invaliuda");
                        }else{
                            $div = $num1 / $num2;
                            echo($div);
                        }
                    break;
        }
    ?>
</body>
</html>