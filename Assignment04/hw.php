<html>
<head>
    <title>แสดงการสร้างและเข้าถึง Numeric Array แบบหลายมิติ</title>
</head>
<body>
    <?php
        $maxRow = 10;
        $maxCol = 5;
        echo "<table border='1' align='center' width='100%'>";
        echo "<tr><td width='60' align='center'>Student</td>";
        echo "<td width='60' align='center'>Assignment</td>"; 
        echo "<td width='60' align='center'>Homework</td>";
        echo "<td width='60' align='center'>Midterm</td>";
        echo "<td width='60' align='center'>Final</td>";
        echo "<td width='60' align='center'>TotalScore</td></tr>";
        for ($stu = 0; $stu < $maxRow; $stu++) {
            echo "<tr>";
            echo "<td align='center'>" . ($stu + 1) . "</td>";
            //// สุ่มค่า Assign
            $assignValue = rand(1, 10);
            echo "<td align='center'>" . $assignValue . "</td>";
            $totalScore = $assignValue;
            //// สุ่มค่า Homework
            $homeworkScore = rand(1, 20);
            $totalScore += $homeworkScore;
            echo "<td align='center'>" . $homeworkScore . "</td>";
            // สุ่มค่า Midterm
            $midtermScore = rand(1, 35);
            $totalScore += $midtermScore;
            echo "<td align='center'>" . $midtermScore . "</td>";
            // สุ่มค่า Final
            $finalScore = rand(1, 35);
            $totalScore += $finalScore;
            echo "<td align='center'>" . $finalScore . "</td>";
            echo "<td align='center'>" . $totalScore . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
