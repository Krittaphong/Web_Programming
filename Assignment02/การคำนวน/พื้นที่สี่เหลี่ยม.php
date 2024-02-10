<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
<form method="post" action="lab6-12cal.php">
    <table border="1" align="center" width="400">
    <tr>

    <td colspan="2" align="center">
    <big> การคำนวน </big>
    </td>
    <tr>

    <tr>
    <td> ความกว้าง </td>
    <td><input type="number" name="w"><br/></td><tr>
    
    <td> ความยาว </td>
    <td><input type="number" name="h"><br/></td><tr> 

    <td>
    <?php
        isset( $_POST['w'] ) ? $w = $_POST['w'] : $w = "";
        isset( $_POST['h'] ) ? $h = $_POST['h'] : $h = "";
        if( !empty( $w ) && !empty( $h ) ) {
            $a = $w * $h;
        echo "พื้นที่สี่เหลี่ยม = {$a}</div>";
  }
?> 
    </td>


    <tr><br>
        <td colspan="2" align="center"><a href="การคำนวน.php" >  <input type="submit"> กลับ </a></td>
    </td>
</form>
</body>
</html>