<?php
include 'dbconn.php';
$sql = "SELECT phId,phName,phPrice FROM phones";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
if ($result->num_rows > 0) {
  // output data of each row
    $phId   =$row["phId"];
    $PhName =$row["phName"];
    $phPrice=$row["phPrice"];
} else {
  echo "0 results";
}
echo $phId;
echo $PhName;
?>