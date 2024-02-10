<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="num1">รับค่าตัวเลขเริ่มต้น:</label>
        <input type="number" name="num1" id="num1" required> <br>
        
        <label for="num2">รับค่าตัวเลขสิ้นสุด:</label>
        <input type="number" name="num2" id="num2" required> <br>
        

        <button type="submit">submit</button> <br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $start_number = intval($_GET["num1"]);
        $end_number = intval($_GET["num2"]);

        $max_number = 0;

        for ($num = $start_number; $num <= $end_number; $num++) {
            if ($num % 12 == 0 && $num > $max_number) {
                $max_number = $num;
            }
        }

        echo "ผลลัพธ์ = " . $max_number;
    }
    ?>
</body>

</body>
</html>