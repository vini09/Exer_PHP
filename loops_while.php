<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - While</title>
</head>
<body>
    
    <?php

        echo '--- inicio do loop --<br/>';

        while($num < 10) {

            $num++; //critério de parada

            if($num == 2 || $num == 6) {
                continue;
            }

            echo "$num <br/>";
        }

    ?>

</body>
</html>