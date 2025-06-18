<?php
//Device Type database (conn)
$dbServer = "localhost";
$dbUser = "archie";
$dbPasswd = "D0ughnut*";
$dbN = "prices";

 $conn = mysqli_connect($dbServer, $dbUser, $dbPasswd, $dbN);
 if( $conn === false) {
     echo "Could not connect.\n";
     die(print_r(mysqli_error(), true));
 }

?>