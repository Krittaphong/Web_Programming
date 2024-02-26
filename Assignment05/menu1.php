<?php 
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = 'bookStore';

    $conn = mysqli_connect($hostname,$username,$password);
    if (!$conn) die("ไม่สามารถติดต่อกับ MySQL ได้");
    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");

    mysqli_query($conn,"set character_set_connection=utf8mb4");
    mysqli_query($conn,"set character_set_client=utf8mb4");
    mysqli_query($conn,"set character_set_results=utf8mb4");

    $book = mysqli_query ($conn, "SELECT * FROM book");
?>

<html>
<head><title>menu.php</title></head>
<body>
    <center>
        <br> <h2> Book Report </h2>
        <table border='1'> 
            <tr>
                <td> ลำดับ </td>
                <td> รหัสหนังสือ </td>
                <td> ชื่อหนังสือ </td>
                <td> ประเภท </td>
                <td> สถานะ </td>
                <td> สำนักพิมพ์ </td>
                <td> ราคา(บาท)/หน่วย </td>
                <td> ราคาให้เช่า(บาท)/หน่วย </td>
                <td> จำนวนวันให้เช่า </td>
                <td> ชื่อไฟล์ภาพ </td>
            </tr>

            <?php
                $row = 1;
                while ($bk = mysqli_fetch_assoc($book)) { 
            ?>
            <tr>
                <td> <?php echo $row ?> </td>
                <td> <?php echo $bk['BookID'] ?> </td>
                <td> <?php echo $bk['BookName'] ?> </td>
                <?php 
                    $TypeID = $bk['TypeID'];
                    $typebook = mysqli_query ($conn, "SELECT TypeName FROM typebook WHERE TypeID = $TypeID");
                    $tb = mysqli_fetch_assoc($typebook)
                ?>
                <td> <?php echo $tb['TypeName'] ?> </td>
                <?php 
                    $StatusID = $bk['StatusID'];
                    $statusbook = mysqli_query ($conn, "SELECT StatusName FROM statusbook WHERE StatusID = $StatusID");
                    $sb = mysqli_fetch_assoc($statusbook)
                ?>
                <td> <?php echo $sb['StatusName'] ?> </td>
                <td> <?php echo $bk['Publish'] ?> </td>
                <td> <?php echo $bk['UnitPrice'] ?> </td>
                <td> <?php echo $bk['UnitRent'] ?> </td>
                <td> <?php echo $bk['DayAmount'] ?> </td>
                <td> <?php echo $bk['Picture'] ?> </td>
            </tr>
            <?php $row++; } ?>
        </table>
        <br><a href="bookList1.php"> กลับหน้า bookList1.php </a> <br>
        <br><a href="menu2.php"> ไปที่หน้า menu2.php </a>
    </center>
</body>
</html>

<style>
    td {
        width: 100px;
        text-align: center;
    }
</style>