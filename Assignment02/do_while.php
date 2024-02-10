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
    $number = 1;
    $sum = 0;

    do {
        if ($number % 2 == 0) {
            echo $number . " คือ เลขคู่";
            echo "<br/>";
            $sum = $sum + $number;
        } 
        
        $number++;
    } while ($number <= 10);

    echo $sum . " ผลรวม";
?>


</body>
</html>

</body>
</html>