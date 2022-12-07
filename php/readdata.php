<?php
    include 'dbconn.php';

    echo '    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/test.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';

    $sql = "SELECT phId, title, dep,price,thumbnail FROM phones";
    $result = $conn->query($sql);
    echo '<div class="box-row phone-list no-1" id="phone-list">';
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

       
        echo '<div class="box-col phone-no-' .$row["phId"].'">';
        echo '<div class="phone-img">';

        $imgTag = '<img class="phone-img" src="'. $row["thumbnail"]. '" alt="phone01" ></div>';
        echo $imgTag;

        echo '<div class="phone-data">
                <div class="phone-name"><b>'.$row["title"] .'</b></div>
                <div class="phone-price">' .$row["price"] .'$</div>
        <div class="add-to-cart">
          <button type="button" class="btn btn-success btn-cart" onclick="addToCart()">Add TO Cart</button>
        </div>
      </div></div>';

    }
    } else {
    echo "0 results";
    }
    echo '</div>';
    echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>';

    $conn->close();

?>