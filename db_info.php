<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "skaksdkfdk";
    $db_name = "mitny";
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    $conn2 = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    mysqli_set_charset($conn, 'utf8');
    mysqli_set_charset($conn2, 'utf8');
    if(!$conn) {
        die(mysqli_error());
    }
    if(mysqli_connect_errno($conn)){
        echo "fail";
    }
    if(mysqli_connect_errno($conn2)){
	echo "fail2";
}
?>