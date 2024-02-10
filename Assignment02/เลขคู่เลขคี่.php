<html>
<head><title>เลขคู่เลขคี่ </title>
</head>
<body>
<?php
    function evenOrOdd( $number ) {
        if( ( $number % 2 ) == 0 ) {
            return $number." คือ เลขคู่"; 
        } else {
            return $number." คือ เลขคี่";
        }
    }

    echo evenOrOdd( 2 );
    echo "<br/>";
    echo evenOrOdd( 3 );
?>
</body>
</html>