<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function add($n1,$n2)
        {
            $result=$n1+$n2;
            echo "<br><br>Result add : " .$result;
        }
        
        $num1 = 10;
        $num2 = 20;
        add($num1, $num2);
    ?>
</body>
</html>