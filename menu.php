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
          <a class="nav-link active" aria-current="page" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
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

<div class="homerow1">
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img src="5.jpg" class="img-fluid" alt="First slide" width="500%" />
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <div class="indexhead">
        <span class="indexinfo1 w3-animate-opacity">Try anything, imagine everything!</span><br /><br />
          <span class="indexinfo2 w3-animate-opacity">When taste buds speak.</span><br /><br />
      </div>
    </div>
</div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img src="cake1.jpg" class="img-fluid" alt="Second slide" width="500%" />
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>

    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img src="mk3.jpg" class="img-fluid" alt="Third slide" width="500%" />
        <div class="mask rgba-black-slight"></div>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

  <div class="menur2">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card" style="width: 20rem;">
            <img src="menu1.jpg" class="card-img-top" style="width:20rem;height:20rem;" alt="...">
            <div class="card-body">
              <h5 class="card-title"><b>BURGERS</b></h5>
              <p class="card-text">Burgers are one of the most popular food in America.Life is too short to miss out on double cheeseburgers.</p>
              <div class="col value">
                <button type="button" class="add btn btn" onclick="window.location.href='#bu'" data-field="">
                  Menu
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img src="dessert3.jpg" class="card-img-top" style="width:20rem;height:20rem;" alt="...">
            <div class="card-body">
              <h5 class="card-title"><b>DESSERTS</b></h5>
              <p class="card-text">Hungry? Why wait? Grab a sweet treat! Dessert is calling me, I must go.</p>
              <div class="col value">
                <button type="button" class="add btn btn" onclick="window.location.href='#de'" data-field="">
                  Menu
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img src="mk.jpg" class="card-img-top"style="width:20rem;height:20rem;" alt="...">
            <div class="card-body">
              <h5 class="card-title"><b>MOCKTAILS</b></h5>
              <p class="card-text"> Detox your body by using one of the fastest and the most convenient ways.Life is better with a cold drink in your hand.Relaxation in every sip.  </p>
              <div class="col value">
                <button type="button" class="add btn btn" onclick="window.location.href='#moc'" data-field="">
                  Menu
                </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
   <div class="row">
     <div class="col-lg-7 menucol">
       <div class="menur3">
         <div class="row menucatr1" id="bu">
           <span class="menutitlebu">BURGERS</span><br/>

           <?php
           $sql2 =  "SELECT * FROM fooddetails WHERE cat_id=1";
           $result2  = $conn->query($sql2);
           $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
             for ($i=1; $i <= count($arr_all); ) { ?>
                 <?php for ($j=1; $j <= 3; $j++) { ?>
                   <?php if ($i+$j-2 == count($arr_all)) {
                     break;
                   }  ?>

             <span class="menucontent">
               <form action="cart_action.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
               <div class="row menurowdetails">
                   <div class="col-7" id="menufetch">
                     <span class="menuname"> <?php echo $arr_all[$i+$j-2]['fname']; ?> </span><br />
                     <span class="menuamt"> Rs.<?php echo $arr_all[$i+$j-2]['amount']; ?> </span>
                   </div>
                     <div class="col-3">
                       <input name="quantity" type="number" class="form-control menuqtyno" value="1" min="0" max="100" required/><br />
                     </div>
                     <div class="col-2">
                       <button type="submit" class="btn  menuaddbtnbu">ADD</button>
                     </div>
               </div>
               </form>
             </span>

                 <?php } ?>
               <?php $i = $i + 3; ?>
             <?php } ?>

         </div>

         <div class="row menucatr2" id="de">
           <span class="menutitlede" >DESSERTS</span><br />

           <?php
           $sql2 =  "SELECT * FROM fooddetails WHERE cat_id=2";
           $result2  = $conn->query($sql2);
           $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
             for ($i=1; $i <= count($arr_all); ) { ?>
                 <?php for ($j=1; $j <= 3; $j++) { ?>
                   <?php if ($i+$j-2 == count($arr_all)) {
                     break;
                   }  ?>

             <span class="menucontent">
               <form action="cart_action.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
               <div class="row menurowdetails">
                   <div class="col-7" id="menufetch">
                     <span class="menuname"> <?php echo $arr_all[$i+$j-2]['fname']; ?> </span><br />
                     <span class="menuamt">Rs.<?php echo $arr_all[$i+$j-2]['amount']; ?> </span>
                   </div>
                     <div class="col-3">
                       <input name="quantity" type="number" class="form-control menuqtyno" value="1" min="0" max="100" required/><br />
                     </div>
                     <div class="col-2">
                       <button type="submit" class="btn menuaddbtnde">ADD</button>
                     </div>
               </div>
               </form>
             </span>

                 <?php } ?>
               <?php $i = $i + 3; ?>
             <?php } ?>

         </div>



       <div class="row menucatr3" id="moc">
         <span class="menutitlemoc">MOCKTAILS</span><br />

         <?php
         $sql2 =  "SELECT * FROM fooddetails WHERE cat_id=3";
         $result2  = $conn->query($sql2);
         $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
           for ($i=1; $i <= count($arr_all); ) { ?>
               <?php for ($j=1; $j <= 3; $j++) { ?>
                 <?php if ($i+$j-2 == count($arr_all)) {
                   break;
                 }  ?>

           <span class="menucontent">
             <form action="cart_action.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
             <div class="row menurowdetails">
                 <div class="col-7" id="menufetch">
                   <span class="menuname"> <?php echo $arr_all[$i+$j-2]['fname']; ?> </span><br />
                   <span class="menuamt">Rs.<?php echo $arr_all[$i+$j-2]['amount']; ?> </span>
                 </div>
                   <div class="col-3">
                     <input name="quantity" type="number" class="form-control menuqtyno" value="1" min="0" max="100" required/><br />
                   </div>
                   <div class="col-2">
                     <button type="submit" class="btn menuaddbtnde">ADD</button>
                   </div>

             </div>
             </form>
           </span>

               <?php } ?>
             <?php $i = $i + 3; ?>
           <?php } ?>

       </div>
     </div>
     </div>


     <div class="row cartcol" id="mecart">
         <div class="menucart">
           <div class="menucarthead" style="margin-left:1.5rem;">
             <h1><b>Cart</b></h1>
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

               <div class="row menucartrow">

                 <div class="col-10">

                    <span class="menuna" style="color:black;"><b><?php echo $row3["food_name"]; ?></b> </span><br />
                  <span class="menupri" style="color:black;"> Rs.<?php echo $row3["food_amount"]; ?> </span>
                   <span class="menucaqty" style="color:black;"> &nbspx <?php echo $row3["food_quantity"]; ?> </span>
                 </div>
                  <div class="col-2" class="trash">

                    <a href="trashaction.php?id=<?php echo $row3["food_id"]; ?>"><i class="fas fa-trash-alt"></i></a>
                  </div>

                </div>

              <?php	} ?>

           <div class="row menucartfoot">
             <div class="col-5" style="margin-top:auto; margin-bottom:auto;">
               <span>
                 <h5><b>Rs. <?php echo $sum; ?></b></h5></span></div>
                   <div class="col-7 menucartcheckout">
                     <form action="cart.php#userdetails">
                       <button type="submit" class="btn menucheckout">CHECKOUT&nbsp<i class="fas fa-long-arrow-alt-right"></i></button>
                     </form>
                   </div>
           <?php }

           else { ?>

               <h3 style="padding:2.5rem; padding-top:0; text-align:center;">Your cart is empty!</h3>

           <?php } ?>

           </div>
         </div>
       </div>
     </div>


   </div>
 </div>
</body>

</html>
