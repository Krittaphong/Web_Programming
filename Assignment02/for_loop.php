<html>
<html>
<head><title>แสดงการใช้งาน while </title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>เลขคู่เลขคี่</title>
</head>
<body>

<?php
    $sum1 = 0; //เลขคู่
    $sum2 = 0; //เลขคี่
    
    for ($number = 1; $number <= 10; $number++) {
        if ($number % 2 == 0) {
            echo $number . " คือ เลขคู่";
            echo "<br/>";
            $sum1 = $sum1 + $number;
            echo "<br/>";
        } 
        else {
            echo $number . " คือ เลขคี่";
            echo "<br/>";
            $sum2 = $sum2 + $number;
            
        }
    }

    echo $sum1 . " ผลรวมเลขคู่";
    echo "<br/>";
    echo $sum2 . " ผลรวมเลขคี่";
?>



</body>
</html>

</body>
</html>