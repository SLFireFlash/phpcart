<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/test.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>test</title>
  </head>
  <body>
  <?php include 'php/dbconn.php';?>
      <div class="wrapper container">
        <nav class="navbar navbar-light bg-light">
            <a class="nav-link active" aria-current="page" href="#">Hiru</a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link" href="#">feedback</a>
            <button class="btn btn-outline-success me-2" type="button" onclick="phoneStructFun()" id="more-load">More</button>
        </nav>

        <div class="box-row phone-list no-1" id="phone-list">

            <div class="box-col phone-no-110">

                  <div class="phone-img">
                          <img class="phone-img" src="imgs/1.jpg" alt="phone01">
                  </div>
                  <div class="phone-data">
                          <div class="phone-name"><b>Xiaomi 13 Pro</b></div>
                          <div class="phone-price">160$</div>
                  
                  <div class="add-to-cart">
                    <button type="button" class="btn btn-success btn-cart" onclick="addToCart('xiaomi 13 pro','160$')">Add TO Cart</button>
                  </div>
                </div>
            </div>

            <div class="box-col phone-no-120">

                <div class="phone-img">
                  <img class="phone-img" src="imgs/2.jpg" alt="phone01" >
                </div>
                <div class="phone-data">
                        <div class="phone-name"><b>Xiaomi 13 Pro</b></div>
                        <div class="phone-price">1760$</div>
                <div class="add-to-cart">
                  <button type="button" class="btn btn-success btn-cart" onclick="addToCart('xiaomi 13 pro','1760$')">Add TO Cart</button>
                </div>
              </div>
              
              
            </div>

            <div class="box-col phone-no-130">

              <div class="phone-img">
                <img class="phone-img" src="imgs/3.jpg" alt="phone01" >
              <div class="phone-data">
                      <div class="phone-name"><b>Xiaomi 13 Pro</b></div>
                      <div class="phone-price">760$</div>
              <div class="add-to-cart">
                <button type="button" class="btn btn-success btn-cart" onclick="addToCart('xiaomi 13 pro','760$')">Add TO Cart</button>
              </div>
            </div>
            </div>

            </div>
        </div>


        <div class="cart-title">
          <center>MY CART<img src="imgs/carts.png" class="cart-img" style="width: 40px; height: 40px;" alt="cart"></center>
       </div>
       <div class="cart" id="cart-items">

       </div>
         
       </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>