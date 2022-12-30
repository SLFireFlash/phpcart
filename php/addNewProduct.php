<?php
    include '../php/dbconn.php';

    $title =$_POST['ProName'];
    $dep =$_POST['ProDes'];
    $price =$_POST['ProPrice'];
    $thumbnail =$_POST['ProImg'];

    $sql = "INSERT INTO phones (title, dep, price,thumbnail)
    VALUES('$title', '$dep', '$price', '$thumbnail')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
