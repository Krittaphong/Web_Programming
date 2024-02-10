<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function multiply($n1,$n2)
        {
            $result=$n1*$n2;
            return $result;
        }
        
        $num1 = 10;
        $num2 = 20;
        $resultMultiply = multiply($num1,$num2);
        echo "<br><br>Result mltiply : " .$resultMultiply;
    ?>
</body>
</html>