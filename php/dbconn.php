<html>
    <head>
        <title>
            cart with backend
        </title>
    </head>
    <body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "password";

        // Create connection
        $conn = mysqli_connect($servername, $username);
        $usedb = "USE cart";

        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        if ($conn->query($usedb) === TRUE) {
            echo "<br>";
            echo "Table used successfully";
          } 
        else {
            echo  $conn->error;
          }
          echo "<br>";
          echo "Connected successfully";

    ?>
    </body>
</html>

