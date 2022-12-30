<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>New Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="../php/addNewProduct.php" method="POST" >
        <h3>WELCOME</h3>

        <label for="username">ProDuct Name</label>
        <input type="text" placeholder="product Name" id="Product-Name" name="ProName">

        <label for="username">ProDuct Des</label>
        <input type="text" placeholder="product description" id="Product-description" name="ProDes">

        <label for="username">ProDuct price</label>
        <input type="text" placeholder="product Price" id="Product-Price" name="ProPrice">

        <label for="username">ProDuct Image</label>
        <input type="text" placeholder="product image" id="Product-Img" name="ProImg">

        <button type="submit" name="add-new-pro"  id="add-new-pro">Add New Product</button>
    </form>
</body>
</html>
