<?php
include "dbconn.php";

$userName =  $_POST['userId'];
$userPw   = $_POST['UserPw'];
$AdminTk = $_POST['adminToken'];

$jsondata = file_get_contents('../json/token.json');
$data = json_decode($jsondata, true);
$adminToken =$data['TOKEN'];

if ($AdminTk != null){
  if($AdminTk == $adminToken){
    $sql = "INSERT INTO userdata (userName,Password,isAdmin)
    VALUES('$userName', '$userPw',1)";

    if ($conn->query($sql) === TRUE)
    {
      echo "Admin Reg Done....!";
    } 
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    } 
  }
  else{

    echo "Admin Token Wrong";

  }
}

else{
  $sql = "INSERT INTO userdata (userName,Password)
  VALUES('$userName', '$userPw')";
  $adch = isset($_POST['isAdmin']);
  if ($conn->query($sql) === TRUE)
  {
      echo "User Reg Done....!";
  } 
      else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


 






?>