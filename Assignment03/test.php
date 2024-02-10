<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax</title>
</head>
<body>
<form action="" method="get">
        <label for="num1">รับค่าเงินเดือน:</label>
        <input type="number" name="num1" id="num1" required> <br>
        
        <label for="num2">รับค่าลดหย่อย/ปี:</label>
        <input type="number" name="num2" id="num2" required> <br>
        
        <label for="num3">รับค่าให้จ่าย:</label>
        <input type="number" name="num3" id="num3" required> <br>


        <button type="submit">submit</button> <br>
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
 
        $salary = $_GET["num1"];
        $deduction = $_GET["num2"];
        $expenses = $_GET["num3"];

 
        $netIncome = $salary - $deduction - $expenses;

  
        echo "<p>Net Income: $netIncome</p>";
    }
    ?>

</body>
</html>
