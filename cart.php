<?php

    include "validateuser.php";
	  include "user.php";

	  $login_email = $_SESSION["loggedin_user"];
    $sql0 =  "SELECT * FROM users WHERE email='".$login_email."'";
    $result0 = $conn->query($sql0);
    $row0 = $result0->fetch_assoc();

    $sql1 =  "SELECT * FROM food";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    if (isset($_GET['added'])) {
      $message = "Your cravings has been added to cart!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

    $sum=0;

    $pos=strpos($login_email,"@");
    $username=substr($login_email, 0, $pos);

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Lime and love</title>


  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  <!-- W3Schools -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- CSS -->
  <link href="style.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet" />

  <!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <!-- Icons -->
  <script src="https://kit.fontawesome.com/67ab68277d.js" crossorigin="anonymous"></script>


  <style>

.welcome {
  color: white;
  font-size: 1rem;
  padding:1rem;
  margin-left: auto;
}

@media (max-width:596px) {

  .welcome {
    order:0;
  }
  .navbar-toggler {
    order:1;
    margin-left:13px;
    margin-right:0;
  }

  .navbar > .collapse {
    margin-top:1rem;
  }

}
</style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark ">
  <div class="container-fluid">
 <a class="navbar-brand" href="logout.php"><span class="lime">LIME</span><span class="and">AND</span><span class="love">LOVE</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cart.php">Cart</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
    <span class="navbar-text welcome">
  welcome, <?php echo $username; ?>!
  </span>
</div>
</div>
</nav>


<div class="cart">
   <div class="row carthead">
     <h3 style="line-height:2; font-size:2rem;">Hello, here is your cart!</h3><br />
   </div>

   <?php
   $sql3 =  "SELECT * FROM cart";
   $result3 = $conn->query($sql3);
   if ($result3->num_rows > 0)
   {
     $sum=0;
     // output data of each row

     while($row3 = $result3->fetch_assoc()) {

       $sum+=$row3["total_amount"];

       ?>

   <div class="row cartinfo">
     <div class="col-sm">
       <span class="cartname"><?php echo $row3["food_name"]; ?></span><br />
     </div>
     <div class="col-sm" style="text-align:center;">
       <span class="cartqty">&nbspx <?php echo $row3["food_quantity"]; ?></span>
     </div>
     <div class="col-sm cartdel" style="text-align:center;">
       <a href="ctrash_action.php?id=<?php echo $row3["food_id"]; ?>" class="carttrash"><i class="fas fa-trash-alt carttrash"></i></a>
     </div>

     <div class="col-sm" style="text-align:right;">
       <span class="cartamt">Rs. <?php echo $row3["total_amount"]; ?></span>
     </div>
   </div>




   <?php	} ?>

   <form action="order_action.php" method="post">
    <div class="row cartdetails" id="userdetails">
      <!-- <h2 class="instr">Please enter your name and address in the form given below.</h2> -->

        <div class="name">
          <input type="text" class="form-control nameip" name="u_name" value="<?php echo $row0["name"] ?>" placeholder="name" required>
        </div>
        <div class="phone">
          <input type="text" class="form-control phoneip" name="u_phone" value="<?php echo $row0["phone"] ?>" placeholder="phone number" minlength="10" maxlength="10"  required>
        </div>
        <div class="address">
          <input type="text" class="form-control addressip" name="u_address" style="height:11rem;" value="<?php echo $row0["address"] ?>" placeholder="address" required></textarea>
        </div>
    </div>

    <div class="row cartfooter">
      <div class="col-6 cartcheckout">
        <button type="submit" class="btn  checkout">SUBMIT</button>
      </div>
      <div class="col-6 total">
        <h1><b>Rs. <?php echo $sum; ?></b></h1>
        <h4 style="color:grey"><b>Total</b></h4>
      </div>
    </div>
  </form>

  <?php }

  else { ?>

      <div class="row cartrow">
        <h1 style="text-align:center;">Your cart is empty!</h1>
        <a href="menu.php" class="goback">Go back to menu</a>
      </div>

  <?php } ?>


  </div>


</body>

</html>
