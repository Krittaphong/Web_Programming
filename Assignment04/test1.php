<link rel="stylesheet" href="test.css">
<?php
$title = $first_name = $last_name = $nickname = $dob = $age = $phone = $email = "";
$nationality = $ethnicity = $religion = $gender = $address = $education_level = $school_name = $gpa = "";
$title_err = $first_name_err = $last_name_err = $dob_err = $age_err = $phone_err = $email_err = "";
$nationality_err = $ethnicity_err = $religion_err = $gender_err = $address_err = $education_level_err = $school_name_err = $gpa_err = "";
$nickname_err = ""; 
$national_id = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $national_id = trim($_POST["national_id"]);
    $title = trim($_POST["title"]);
    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $nickname = trim($_POST["nickname"]);

    $dob = trim($_POST["dob"]);

    // คำนวณอายุจากวันเกิด
    $year_of_birth = date("Y", strtotime($dob));
    $current_year = date("Y");
    $age = $current_year - $year_of_birth;

    $phone = trim($_POST["phone"]);
    $email = trim($_POST["email"]);
    $nationality = trim($_POST["nationality"]);
    $ethnicity = trim($_POST["ethnicity"]);
    $religion = trim($_POST["religion"]);
    $gender = trim($_POST["gender"]);
    $address = trim($_POST["address"]);
    $education_level = trim($_POST["education_level"]);
    $school_name = trim($_POST["school_name"]);
    $gpa = trim($_POST["gpa"]);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($title_err) && empty($first_name_err) && empty($last_name_err) && empty($dob_err) && empty($age_err) && empty($phone_err) && empty($email_err) && empty($nationality_err) && empty($ethnicity_err) && empty($religion_err) && empty($gender_err) && empty($address_err) && empty($education_level_err) && empty($school_name_err) && empty($gpa_err) && empty($nickname_err)) {
        echo "<div class='data-container'>";
        echo "<h2>ข้อมูลของท่าน:</h2>";
        echo "<p><center><strong>National ID:</strong> " . $national_id . "</p>";
        echo "<p><strong>Title:</strong> " . $title . "</p>";
        echo "<p><strong>First Name:</strong> " . $first_name . "</p>";
        echo "<p><strong>Last Name:</strong> " . $last_name . "</p>";
        echo "<p><strong>Nickname:</strong> " . $nickname . "</p>";
        echo "<p><strong>Date of Birth:</strong> " . $dob . "</p>";
        echo "<p><strong>Age:</strong> " . $age . "</p>";
        echo "<p><strong>Phone:</strong> " . $phone . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Nationality:</strong> " . $nationality . "</p>";
        echo "<p><strong>Ethnicity:</strong> " . $ethnicity . "</p>";
        echo "<p><strong>Religion:</strong> " . $religion . "</p>";
        echo "<p><strong>Gender:</strong> " . $gender . "</p>";
        echo "<p><strong>Address:</strong> " . $address . "</p>";
        echo "<p><strong>Education Level:</strong> " . $education_level . "</p>";
        echo "<p><strong>School Name:</strong> " . $school_name . "</p>";
        echo "<p><strong>GPA:</strong> " . $gpa . "</p>";
    }
}
?>
