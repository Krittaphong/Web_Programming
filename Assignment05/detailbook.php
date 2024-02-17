<?php
    $bookID = $_REQUEST['bookId'];

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookStore";

    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn) die("ไม่สามารถติดต่อกับ MySQL ได้");
    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");

    mysqli_query($conn,"set character_set_connection=utf8mb4");
    mysqli_query($conn,"set character_set_client=utf8mb4");
    mysqli_query($conn,"set character_set_results=utf8mb4");

    $sql = "SELECT * FROM book WHERE bookId = '$bookID'";
    $result = mysqli_query ($conn, $sql);
    $row = mysqli_fetch_array($result);

    $sql2 = "SELECT * FROM typebook WHERE TypeID = '$row[2]'";
    $result2 = mysqli_query ($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);

    $sql3 = "SELECT * FROM statusbook WHERE StatusID = '$row[3]'";
    $result3 = mysqli_query ($conn, $sql3);
    $row3 = mysqli_fetch_array($result3);
?>

<html>
<head><title>detailbook.php</title></head>
<body>
    <center>
    <table width="500" border="1"> 
        <tr>
            <td colspan='2' align="center"> <big> แสดงรายละเอียดหนังสือ </big> </td>
        </tr>
        <tr>
            <td> รหัสหนังสือ </td>
            <td> <?php echo $row[0] ?> </td>
        </tr>
        <tr>
            <td> ชื่อหนังสือ </td>
            <td> <?php echo $row[1] ?> </td>
        </tr>
        <tr>
            <td> ประเภทหนังสือ </td>
            <td> <?php echo $row2[1] ?> </td>
        </tr>
        <tr>
            <td> สถานะหนังสือ </td>
            <td> <?php echo $row3[1] ?> </td>
        </tr>
        <tr>
            <td> สำนักพิมพ์ </td>
            <td> <?php echo $row[4] ?> </td>
        </tr>
        <tr>
            <td> ราคาที่ซื้อ </td>
            <td> <?php echo $row[5] ?> </td>
        </tr>
        <tr>
            <td> ราคาเช่า </td>
            <td> <?php echo $row[6] ?> </td>
        </tr>
        <tr>
            <td> รูปภาพ </td>
            <td> <img src='<?php echo "pictures/".$row[8] ?>' width="150" height ="200"> </td>
        </tr>
        <tr>
            <td> จำนวนวันที่ยืมได้ </td>
            <td> <?php echo $row[7] ?> </td>
        </tr>
        <tr>
            <td> วันที่จัดเก็บหนังสือ </td>
            <td> <?php echo $row[9] ?> </td>
        </tr>
    </table>
    <br><a href="bookList1.php"> กลับหน้า bookList1.php </a>
    </center>
</body>
</html>