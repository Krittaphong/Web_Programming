<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function divide($n1,$n2,&$result)
        {
            $result=$n1/$n2;
        }
        
        $num1 = 10;
        $num2 = 20;
        $resultdivide = 0;
        divide($num1 , $num2, $resultdivide);
        echo "<br><br>Result divide : " .$resultdivide;
    ?>
</body>
</html>