<?php 
    $conn = mysqli_connect(
        '15.164.99.189',
        'root',
        'asdf',
        'dockerdb',
        '9876'
    );
    if(mysqli_connect_errno()){
        echo "failed to connect to MYSQL: ".mysqli_connect.error();
    }
    $sql = "SELECT VERSION()";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    print_r($row["VERSION()"]);
?>