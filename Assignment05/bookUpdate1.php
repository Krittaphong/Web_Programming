<?php
    session_start();

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookStore";
    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn) die("ไม่สามารถติดต่อกับ mySQL ได้");
    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");
    mysqli_query($conn, "set character_set_connection=utf8mb4");
    mysqli_query($conn, "set character_set_client=utf8mb4");
    mysqli_query($conn, "set character_set_results=utf8mb4");

    $id = $_REQUEST['bookId'];
    $_SESSION['id'] = $id;
    $bookQuery = mysqli_query($conn, "SELECT * FROM book WHERE BookID = $id");
    $bk = mysqli_fetch_assoc($bookQuery);  
        
    function getTypeSelect() {
        global $conn, $bk;
        $sql = "SELECT * FROM typebook ORDER BY typeId"; 
        $dbQuery = mysqli_query($conn, $sql);
        if (!$dbQuery) die("(functionDB:getTypeSelect) select typebook มีข้อผิดพลาด");
        echo '<option value="">เลือกประเภทหนังสือ</option>';
        while ($result = mysqli_fetch_object($dbQuery)) {
            $selected = ($bk['TypeID'] == $result->TypeID) ? 'selected' : '';
            echo '<option value="' . $result->TypeID . '" ' . $selected . '>' . $result->TypeName . '</option>';
        }
        
    }

    function getStatusSelect() {
        global $conn, $bk;
        $sql = "SELECT * FROM statusbook ORDER BY statusId";
        $dbQuery = mysqli_query($conn, $sql);
        if (!$dbQuery) die("(functionDB:getStatusSelect) select status มีข้อผิดพลาด");
        echo '<option value="">เลือกสถานะ</option>';
        while ($result = mysqli_fetch_object($dbQuery)) {
            $selected = ($bk['StatusID'] == $result->StatusID) ? 'selected' : '';
            echo '<option value="' . $result->StatusID . '" ' . $selected . '>' . $result->StatusName . '</option>';
        }
    }
?>

<html>
<head>
    <title>bookUpdate1.php</title>
</head>
<body>
    <center>
        <form enctype="multipart/form-data" name="save" method="post" action="bookUpdate2.php">
            <br><br>
            <table width="700" border="1" bgcolor="#ffffff">
                <tr>
                    <th colspan="2" bgcolor="" height="21">แก้ไขข้อมูลหนังสือ</th>
                </tr>
                <tr>
                    <td width="200">รหัสหนังสือ : </td>
                    <td width="400"><input type="text" name="bookId" size="10" maxlength="5" placeholder="<?php echo $bk['BookID'] ?>"></td>
                </tr>
                <tr>
                    <td width="200">ชื่อหนังสือ : </td>
                    <td><input type="text" name="bookName" size="50" maxlength="50" placeholder="<?php echo $bk['BookName'] ?>"> </td>
                </tr>
                <tr>
                    <td width="200">ประเภทหนังสือ : </td>
                    <td><select name="typeId"><?php getTypeSelect(); ?></select></td>
                </tr>
                <tr>
                    <td width="200">สถานะหนังสือ : </td>
                    <td><select name="statusId"><?php getStatusSelect(); ?></select></td>
                </tr>
                <tr>
                    <td width="200">สำนักพิมพ์ : </td>
                    <td><input type="text" name="publish" maxlength="25" size="20" placeholder="<?php echo $bk['Publish'] ?>"></td>
                </tr>
                <tr>
                    <td width="200">ราคาที่ซื้อ : </td>
                    <td><input type="text" name="unitPrice" maxlength="25" size="20" placeholder="<?php echo $bk['UnitPrice'] ?>"></td>
                </tr>
                <tr>
                    <td width="200">ราคาที่เช่า : </td>
                    <td><input type="text" name="unitRent" size="20" maxlength="25" placeholder="<?php echo $bk['UnitRent'] ?>"></td>
                </tr>
                <tr>
                    <td width="200">จำนวนวันที่เช่า : </td>
                    <td><input type="text" name="dayAmount" maxlength="25" size="20" placeholder="<?php echo $bk['DayAmount'] ?>"></td>
                </tr>
                <tr>
                    <td width="200">รูปภาพ : </td>
                    <td> 
                        <input type="text" placeholder="<?php echo $bk['Picture'] ?>" readonly> <!-- or disabled -->
                        <input type="file" name="imageFile" size="30">
                    </td>
                </tr>
            </table>
            <br><input type="submit" name="submit" value="บันทึกข้อมูล" style="cursor:hand;">
            <input type="reset" name="reset" value="ยกเลิก" style="cursor:hand;">
        </form>
        <br><br><a href="bookList1.php">กลับหน้า bookList1.php</a>;
    </center>
</body>
</html>