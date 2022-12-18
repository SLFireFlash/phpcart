
<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";

    // Create connection
    $conn = mysqli_connect($servername, $username);
    $usedb = "USE cart";

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    if ($conn->query($usedb) != TRUE) {
        echo  $conn->error;
        }

?>
</body>

