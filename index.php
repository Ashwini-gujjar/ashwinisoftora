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
.video-background-holder {
  position: relative;
  background-color: white;
  height: calc(100vh - 72px);
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

.video-background-holder video {
  position: absolute;
  top: 50%;
  left: 50%;

  min-width: 100%;
  min-height: 100%;
  width: 100%;
  height: 870px;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

.video-background-content {
  position: relative;
  z-index: 2;
}

.video-background-overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;

  opacity: 0.5;
  z-index: 1;
}

.display-4 {
  font-weight: bold;
  color:		#deb887;
}

.mb-0 {

  color:	#deb887;
}


@media screen and (min-width:1132px) {
  .video-background-holder video {
    top: 18%;
    left: 50%;

  min-width:100%;
  min-height: 100%;
  width: 1200px;
  height: 1200px;
}
}

@media screen and (max-width:1132px) {
  .video-background-holder video {
    top: 18%;
    left: 50%;

  min-width:100%;
  min-height: 100%;
  width: 1200px;
  height: 1200px;
}
}

@media screen and (min-width:1040px) {
  .display-4 {
    margin-top:18rem;
    font-size:3rem;

  }
}


@media screen and (max-width:1040px) {
  .display-4 {
    margin-top: 4.5rem;
    font-size:1.5rem;

  }
  .mb-0 {

    font-size:1rem;

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
          <a class="nav-link" aria-current="page" href="#contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLRForm">Sign Up</a>
        </li>
      </ul>
    </div>
    </div>
  </div>
</nav>
<div class="video-background-holder">
    <div class="video-background-overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="baking.mp4" type="video/mp4">
      </video>
    <div class="video-background-content container">
      <div class=" text-center align-items-center">
        <div class="text-white">
          <h1 class="display-4">Are you feeling downie? Then eat a brownie!</h1>
          <p class="lead mb-0">sounds accurate ahh?</p>


        </div>
      </div>
    </div>
  </div>
  <!-- End -->

 <div class="bg-image" id="about">

  <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
    <div class="text">
	<h1>About Us</h1><br>
	<hr />
      <p>Lime and Love was created in 2008 out of passion for amazing food and service.Lot of hard work has been involved in making this restaurant a successful one.We beleive that using the freshest ingredients produces the best results.We are tireless in staying abreast of the latest food trends.We are obsessed with creating customized menus and culinary masterpieces for our clients.<br>Simply to put:we exist to make your vision a reality.</p>
    </div>
  </div>
</div>

<div class="row indexrow3 " id="features">
      <div class="col indexc3">
        <i class="fas fa-utensils fa-5x"></i><br /><br />
        <h3 class="adv">Variety of Foods</h3>

      </div>
      <div class="col indexc3">
        <i class="fas fa-wallet fa-5x"></i><br /><br />
        <h3 class="adv">Reasonable cost</h3>
      </div>
      <div class="col indexc3">
        <i class="fas fa-cocktail fa-5x"></i><br /><br />
        <h3 class="adv">Flavorsome</h3>

      </div>
   </div>
<div class="row indexrow4">

  <div class="contactrow" id="contact">
   <div class="column reach">
     <h1 class="contacthead">Find Us</h1>
     <i class="fas fa-map-marker"></i>&nbsp&nbsp #865, 2nd cross,
     <br />Avalahalli,Yelahanka
     <br />Bengaluru, Karnataka 560064

     <br /><i class="fas fa-envelope"></i>&nbsp&nbsplimeandlove@gmail.com
     <br /><i class="fab fa-instagram"></i>&nbsp&nbsp@lime_and_love
     <br /><i class="fas fa-phone"></i>&nbsp&nbsp9012348650
   </div>
   <div class="column touch">
     <form action="mailto:limeandlove@gmail.com" method="post" enctype="text/plain">
       <h1 class="contacthead">Feedback/any queries</h1>
       <div class="mb-3">
         <label for="formControlInput1" class="form-label">Name</label>
         <input type="text" class="form-control feed" id="formControlInput1">
       </div>
       <div class="mb-3">
         <label for="formControlTextarea1" class="form-label">Comments</label>
         <textarea class="form-control feed" id="formControlTextarea1" rows="3"></textarea>
       </div>
       <div class="mb-3">
         <button type="submit" class="btn btn-outline-light submit-1 w3-animate-opacity " value="Submit">Submit</button>
       </div>
     </form>
   </div>
 </div>
</div>
<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog cascading-modal" role="document">
   <!--Content-->
   <div class="modal-content">

     <!--Modal cascading tabs-->
     <div class="modal-c-tabs">

       <!-- Nav tabs -->
       <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
         <li class="nav-item">
           <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
             Login</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
             Register</a>
         </li>
       </ul>

       <!-- Tab panels -->
       <div class="tab-content" id="logreg">
         <!--Panel 7-->
         <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

           <!--Body-->
           <div class="modal-body mb-1">

             <a class="btn btn-outline-info waves-effect ml-auto close"  data-dismiss="modal"><i class="fas fa-times"></i></a>

      <form action="login.php" method="post">
             <div class="md-form form-sm mb-5">
               <i class="fas fa-envelope prefix "></i>
               <input type="email"  name="login_email" id="modalLRInput10" class="form-control form-control-sm validate sform">
               <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
             </div>

             <div class="md-form form-sm mb-4">
               <i class="fas fa-lock prefix "></i>
               <input type="password" name="login_pwd" id="modalLRInput11" class="form-control form-control-sm validate sform">
               <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
             </div>
             <div class="text-center mt-2">
               <button type="submit" class="btn btn-basic sbutton">Log in <i class="fas fa-sign-in ml-1"></i></button>
             </div>
       </form>
           </div>
         </div>
         <!--/.Panel 7-->

         <!--Panel 8-->
         <div class="tab-pane fade" id="panel8" role="tabpanel">

           <!--Body-->
           <div class="modal-body">
     <form action="registerpage.php" method="post">
             <div class="md-form form-sm mb-5">
               <i class="fas fa-envelope prefix"></i>
               <input type="email"  name="register_email" id="modalLRInput12" class="form-control form-control-sm validate sform">
               <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
             </div>

             <div class="md-form form-sm mb-5">
               <i class="fas fa-lock prefix"></i>
               <input type="password" name="register_pwd" id="modalLRInput13" class="form-control form-control-sm validate sform">
               <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
             </div>

             <div class="md-form form-sm mb-4">
               <i class="fas fa-lock prefix"></i>
               <input type="password" name="register_repwd" id="modalLRInput14" class="form-control form-control-sm validate sform">
               <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
             </div>

             <div class="text-center form-sm mt-2">
               <button class="btn btn-basic sbutton">Sign up <i class="fas fa-sign-in ml-1"></i></button>
             </div>
            </form>
           </div>

         </div>
         <!--/.Panel 8-->
       </div>

     </div>
   </div>
   <!--/.Content-->
 </div>
</div>
<!--Modal: Login / Register Form-->
</body>
</html>
<?php
    if (isset($_GET['loginFailed'])) {
            $message = "Invalid Credentials ! Please try again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (isset($_GET['diffPwd'])) {
          $message = "Passwords do not match, try again!";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (isset($_GET['usedEmail'])) {
          $message = "Email is already used, try again!";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (isset($_GET['regex'])) {
          $message = "Enter email and password in proper format.";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }

    ?>
