
let buttonList = document.querySelectorAll("button");
buttonList.forEach(function(i){
    i.addEventListener("click", function(e){
     alert("item Added To Cart");
     <?php
    $jsondata = file_get_contents('../json/tempData.json');
    $data = json_decode($jsondata, true);
    $userName =$data['userName'];
    $userId =$data['userId'];
    $isAdmin =$data['isAdmin'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/test.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/productStyle.css">
    <link rel="stylesheet" href="../css/test.css">
    <title>Products</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark container">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">HIRU E SHOP</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> View Cart</a>
              </li>
            </ul>
            <?php
            if ($isAdmin ==1){
              echo '<a class="nav-link active me-2" aria-current="page" href="#" id="product-add">Add Product</a>';
            }


            echo '<a class="nav-link active me-2" aria-current="page" href="#" id="account-id">'.$userName.'</a>';

            ?>
          </div>
        </div>
      </nav>
      
    <div class="container products-page">
      <?php
        include "../php/dbconn.php";

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
                <button type="button" id="btn_'.$row["phId"].'" class="btn btn-success btn-cart" value="'.$row["phId"].'" onclick="addToCart(this)">Add TO Cart</button>
              </div>
            </div></div>';
          }
          }

      ?>     
    </div>
    <script src="../js/addToCart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

    })
  })