<?php
    session_start();

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookStore";
    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn) die("ไม่สามารถติดต่อกับ mySQL ได้");
    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");
    mysqli_query($conn,"set character_set_connection=utf8mb4");
    mysqli_query($conn,"set character_set_client=utf8mb4");
    mysqli_query($conn,"set character_set_results=utf8mb4");

    $bookId = $_SESSION['id'];
    $bookQuery = mysqli_query($conn, "SELECT * FROM book WHERE BookID = $bookId");
    $bk = mysqli_fetch_assoc($bookQuery);  

    $bookName = $_POST['bookName'] == '' ? $bk['BookName'] : $_POST['bookName'];
    $typeId = $_POST['typeId'] == '' ? $bk['TypeID'] : $_POST['typeId'];
    $statusId = $_POST['statusId'] == '' ? $bk['StatusID'] : $_POST['statusId'];
    $publish = $_POST['publish'] == '' ? $bk['Publish'] : $_POST['publish'];
    $unitPrice = $_POST['unitPrice'] == '' ? $bk['UnitPrice'] : $_POST['unitPrice'];
    $unitRent = $_POST['unitRent'] == '' ? $bk['UnitRent'] : $_POST['unitRent'];
    $dayAmount = $_POST['dayAmount'] == '' ? $bk['DayAmount'] : $_POST['dayAmount'];
    $oldImageFile = @$_POST['oldImageFile'];
    $imageFileName = @$_FILES['imageFile']['name'];
    $imageFileType = @$_FILES['imageFile']['type'];
    $imageFileSize = @$_FILES['imageFile']['size'];
    $imageFileTmpName = @$_FILES['imageFile']['tmp_name'];
    $picture="";
    $bookDate = date("Y-m-d");

    echo '<center>';
    if ($_FILES['imageFile']['name']=="") {
        echo '<b><li>คุณไม่ได้เลือกรูปภาพ</li></b><br>';
        $picture = $bk['Picture'];
    } else {
        move_uploaded_file($_FILES["imageFile"]["tmp_name"], "pictures/".$_FILES["imageFile"]["name"]);
        $picture = $_FILES['imageFile']['name'];
    }

    $sql = "UPDATE book SET BookID = '$bookId', BookName = '$bookName', TypeID = '$typeId', StatusID = '$statusId', 
        Publish = '$publish', UnitPrice = '$unitPrice', UnitRent = '$unitRent',
        DayAmount = '$dayAmount', Picture = '$picture', BookDate = '$bookDate' WHERE BookID = '$bookId'"; 
    mysqli_query($conn, $sql) or die("insert ลงตาราง book มีข้อผิดพลาดเกิดขึ้น");

    echo '<br><br><h2>บันทึกข้อมูลหนังสือรหัส '.$bookId.' เรียบร้อย</h2>';
    echo '<br><br><a href="bookList1.php">กลับหน้า bookList1.php</a>';
    mysqli_close($conn);
    echo '</center>';
?>