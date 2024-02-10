<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Rows</title>
</head>
<body>
    <form action="" method="get">
        <label for="num1">Enter number:</label>
        <input type="number" name="num1" id="num1" required>
        <button type="submit">submit</button> <br>
    </form>

       

    <?php
if(isset($_GET['num1'])) {
    $num1 = $_GET['num1'];
    if ($num1 > 0) {
        echo "<h3>ผลลัพธ์ของการรันโปรแกรม</h3>";
        echo "<style>.green-star { color: green; }</style>";
        for ($i = 1; $i <= $num1; $i++) {
            echo "row:$i ";
            for ($j = 1; $j <= $i; $j++) {
                echo "<span class='green-star'>*</span>";
            }
            echo "<br>";
        }
    } 
}
?>
</body>
</html>
