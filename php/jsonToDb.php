<?php
  include "dbconn.php";
  for ($x =10; $x <= 15; $x++) {
    $jsondata = file_get_contents('https://dummyjson.com/products/'.$x);
    $data = json_decode($jsondata, true);
  
    $title =$data['title'];
    $dep =$data['description'];
    $price =$data['price'];
    $thumbnail =$data['thumbnail'];
  
  
      //insert into mysql table
      $sql = "INSERT INTO phones (title, dep, price,thumbnail)
      VALUES('$title', '$dep', '$price', '$thumbnail')";
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
  }


  $conn->close();
?>