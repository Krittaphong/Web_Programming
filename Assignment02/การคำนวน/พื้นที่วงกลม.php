<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
    <form method="post" action="lab6-12cal.php">
    <table border="1" align="center" width="400">
    <tr>

    <td colspan="2" align="center">
    <big> การคำนวน </big>
    </td>
    <tr>

    <tr>
    <td> รัศมีของวงกลม </td>
    <td><input type="text" name="v"></td></tr> 
    <td>
    <?php
    isset( $_POST['v'] ) ? $v = $_POST['v'] : $v = "";
    if( !empty( $v ) ) {

        $pi = 3.14;
        $total = $pi * ( $v * $v );
        echo "พื้นที่วงกลม = ".number_format( $total, 2 );
    }
?>
    </td></tr>
    </tr>
        <tr><br>
            <td colspan="2" align="center"><a href="การคำนวน.php" > <input type="submit"> กลับ </a></td>
        </td>
</form>
</body>
</html>