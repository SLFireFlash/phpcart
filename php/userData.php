<?php
include "dbconn.php";

$userName =  $_POST['userId'];
$userPw   = $_POST['UserPw'];





if($adch == 0)
    {
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
    else
    {
        $jsondata = file_get_contents("../json/token.json");
        $data = json_decode($jsondata, true);
        $token =$data['TOKEN'];

        $sql = "INSERT INTO userdata (userName,Password,isAdmin)
        VALUES('$userName', '$userPw','$token')";
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