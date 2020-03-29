<?php 
    $conn = mysqli_connect(
        'docker-mysql-test.cbd4hhyozn6z.ap-northeast-2.rds.amazonaws.com',
        'user',
        'password123',
        'dockerdb',
        '3306'
    );
    if(mysqli_connect_errno()){
        echo "failed to connect to MYSQL: ".mysqli_connect.error();
    }
    $sql = "SELECT VERSION()";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    print_r($row["VERSION()"]);
?>
