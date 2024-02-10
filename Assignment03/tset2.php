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

    $income = $_GET["num1"];
    $deduction = $_GET["num2"];
    $expenses = $_GET["num3"];

    $netIncome = $income - $deduction - $expenses;

    $bracket1 = 150000;
    $bracket2 = 300000;
    $bracket3 = 500000;
    $bracket4 = 750000;
    $bracket5 = 1000000;
    $bracket6 = 2000000;
    $bracket7 = 5000000;
    $bracket8 = 5000001;

    $taxRate1 = 0;
    $taxRate2 = 0.05;
    $taxRate3 = 0.10;
    $taxRate4 = 0.15;
    $taxRate5 = 0.20;
    $taxRate6 = 0.25;
    $taxRate7 = 0.30;
    $taxRate8 = 0.35;

    if ($netIncome <= $bracket1) {
        $tax = $netIncome * $taxRate1;
    } elseif ($netIncome <= $bracket2) {
        $tax = $bracket1 * $taxRate1 + ($netIncome - $bracket1) * $taxRate2;
    } elseif ($netIncome <= $bracket3) {
        $tax = $bracket1 * $taxRate1 + ($bracket2 - $bracket1) * $taxRate2 + ($netIncome - $bracket2) * $taxRate3;
    } elseif ($netIncome <= $bracket4) {
        $tax = $bracket1 * $taxRate1 + ($bracket2 - $bracket1) * $taxRate2 + ($bracket3 - $bracket2) * $taxRate3 + ($netIncome - $bracket3) * $taxRate4;
    } elseif ($netIncome <= $bracket5) {
        $tax = $bracket1 * $taxRate1 + ($bracket2 - $bracket1) * $taxRate2 + ($bracket3 - $bracket2) * $taxRate3 + ($bracket4 - $bracket3) * $taxRate4 + ($netIncome - $bracket4) * $taxRate5;
    } elseif ($netIncome <= $bracket6) {
        $tax = $bracket1 * $taxRate1 + ($bracket2 - $bracket1) * $taxRate2 + ($bracket3 - $bracket2) * $taxRate3 + ($bracket4 - $bracket3) * $taxRate4 + ($bracket5 - $bracket4) * $taxRate5 + ($netIncome - $bracket5) * $taxRate6;
    } elseif ($netIncome <= $bracket7) {
        $tax = $bracket1 * $taxRate1 + ($bracket2 - $bracket1) * $taxRate2 + ($bracket3 - $bracket2) * $taxRate3 + ($bracket4 - $bracket3) * $taxRate4 + ($bracket5 - $bracket4) * $taxRate5 + ($bracket6 - $bracket5) * $taxRate6 + ($netIncome - $bracket6) * $taxRate7;
    } else {
        $additionalBrackets = ceil(($netIncome - $bracket7) / 250000);
        $tax = $bracket1 * $taxRate1 + ($bracket2 - $bracket1) * $taxRate2 + ($bracket3 - $bracket2) * $taxRate3 + ($bracket4 - $bracket3) * $taxRate4 + ($bracket5 - $bracket4) * $taxRate5 + ($bracket6 - $bracket5) * $taxRate6 + ($bracket7 - $bracket6) * $taxRate7 + $additionalBrackets * 250000 * $taxRate8;
    }

    echo "<p>เงินได้สุทธิ: $netIncome</p>";
    echo "<p>ภาษี: $tax</p>";
}
?>

</body>
</html>
