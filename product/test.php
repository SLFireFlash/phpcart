<form action="" method="POST">
    <button class="btn btn-success btn-cart" type="submit" value="0" name="mybutton">click me 1</button>
    <button class="btn btn-success btn-cart" type="submit" value="1" name="mybutton">click me 2</button>
    <button class="btn btn-success btn-cart" type="submit" value="2" name="mybutton">click me 3</button>
</form>

<?php 
   if (isset($_POST["mybutton"]))
   {
       $clickedBtnId = $_POST["mybutton"];
   }
   echo $clickedBtnId;
?>

<?php
   if (isset($_POST["btn-add-to-cart-id"]))
   {
       $clickedBtnId = $_POST["btn-add-to-cart-id"];
   }
   echo $clickedBtnId;

?>