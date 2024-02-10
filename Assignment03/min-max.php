<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min Max</title>
</head>

<body>
    <center>
        <?php if(isset($_REQUEST['btnSubmit'])) {
                $n = $_REQUEST['n'];
                $sum = 0;
                $countN = count($n);
                // sort($n); // เรียงจากน้อยไปมาก
                rsort($n); // เรียงจากมากไปน้อย

                echo "Result <br>";
                echo "Max to Min : "; 
                for($i = 0; $i < $countN; $i++) {
                    echo $n[$i];
                    $sum = $sum + $n[$i];
                }
                echo "<br>";
                echo "Max : " . max($n) . "<br>";
                echo "Min : " . min($n) . "<br>";
                echo "Sum : " . $sum . "<br>";
            } else { ?>
                <form action="minMax.php" method="GET" name="form1">
                    <table>
                        <h1>Enter Number</h1>
                        <input type="text" name="n[]" id="input1" required><br>
                        <input type="text" name="n[]" id="input1" required><br>
                        <input type="text" name="n[]" id="input1" required><br>
                        <input type="text" name="n[]" id="input1" required><br>
                        <br>
                        <input type="submit" id="submit" name="btnSubmit">
                        <input type="reset" id="submit"name="btnreset">
                    </table>
                </form>
            <?php 
            } 
            ?>
        
    </center>
</body>

</html>