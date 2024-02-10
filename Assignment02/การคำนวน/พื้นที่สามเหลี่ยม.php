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
    <td> ค่าฐาน </td>
    <td><input type='text' name='base'><br/></td><tr> 


    <td> ค่าความสูง </td>
    <td><input type='text' name='height'></td><tr>
    <td>
    <?php
    isset( $_POST['base'] ) ? $base = $_POST['base'] : $base = 0;
    isset( $_POST['height'] ) ? $height = $_POST['height'] : $height = 0;

    if( $base > 0 && $height > 0 ) {
        $area = 1.0 / 2.0 * ( $base * $height );
        echo "พื้นที่สามเหลี่ยม =  ".number_format( $area, 2 );
    }
?>
    </td></tr>
    </tr>
     <td colspan="2" align="center"><a href="การคำนวน.php" > <input type="submit"> กลับ </a></td>
    </td>
</form>
</body>
</html>