<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action='<?=$_SERVER['PHP_SELF'];?>' method='POST'>
<form method="post" action="lab6-12cal.php">
    <table border="1" align="center" width="400">
    <tr>

    <td colspan="2" align="center">
    <big> การคำนวน </big>
    </td>
    <tr>

    <tr>
    <td> ความยาวด้านที่ 1 </td>
    <td><input type='text' name='w1'><br/></td><tr>
    
    <td> ความยาวด้านที่ 2 </td>
    <td><input type='text' name='w2'><br/></td><tr> 

    <td> ความสูง </td>
    <td><input type='text' name='h'><br/></td><tr> 

    <td>
        <?php
        isset( $_POST['w1'] ) ? $w1 = $_POST['w1'] : $w1 = 0;
        isset( $_POST['w2'] ) ? $w2 = $_POST['w2'] : $w2 = 0;
        isset( $_POST['h'] ) ? $h = $_POST['h'] : $h = 0;
        if( $w1 > 0 && $w2 > 0 && $h > 0 ) {
            $s = ( 1 / 2 ) * $h  * ( $w1 + $w2 );
            echo "พื้นที่สี่เหลี่ยมคางหมู = ".$s;
    }
?>
    </td>

    <tr><br>
        <td colspan="2" align="center"><a href="การคำนวน.php" > <input type='submit' > กลับ </a></td>
    </td>
</form>
</body>
</html>