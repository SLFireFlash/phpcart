<?php
include "dbconn.php";

$userName =  $_POST['userId'];
$userPw   = $_POST['UserPw'];

$sql ="SELECT * FROM userdata WHERE UserName = '". $userName ."'";
$result = $conn->query($sql);

if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $uName =$row['UserName'];
    $uId =$row['UserID'];
    $uPw =$row['Password'];
    $ad =$row['isAdmin'];

    if($uPw == $userPw){
        if($ad == 1){
            echo "Admin Log In done..";
        }
        else{
            echo "user login done...";
        }
    }else{
        echo "password wrong";
        $uName ="***";
        $uId ="***";
        $uPw ="***";
        $ad ="***";

    }
} else if($result->num_rows > 1){
    while($row = $result->fetch_assoc()){
        $uName =$row['UserName'];
        $uId =$row['UserID'];
        $uPw =$row['Password'];
        $ad =$row['isAdmin'];

        if($uPw == $userPw){
            if($ad == 1){
                echo "Admin Log In done..";
                break;
            }
            else{
                echo "user login done...";
                break;
            }
        }
}
   
}else{
    echo "user Name or password wrong";
    $uName ="***";
    $uId ="***";
    $uPw ="***";
    $ad ="***";
}
echo "<br>";
echo "User Name:".$uName;
echo "<br>";
echo "password:".$uPw;
echo "<br>";
echo "user ID:".$uId;
echo "<br>";
echo "is Admin:".$ad;
$conn->close();



?>