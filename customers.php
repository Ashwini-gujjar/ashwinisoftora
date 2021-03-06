<?php


 include "connect.php";
 $sql1="SELECT * FROM users";
 $result1=$conn->query($sql1);
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
  <link href="styleadmin.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet" />

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
          <a class="nav-link active" aria-current="page" href="customers.php">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="orders.php">Orders</a>
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

<div class="customerbody">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"><h3>Id</th></h3>
        <th scope="col"><h3>Name</th></h3>
        <th scope="col"><h3>Email</th></h3>
        <th scope="col"><h3>Phone</th></h3>
      </tr>
    </thead>
    <tbody>
      <?php
  while($row1=$result1->fetch_assoc()) {
	  ?>
    <tr>
      <th scope="row"><?php echo $row1["id"]; ?></th>
      <td><?php echo $row1["name"]; ?></td>
      <td><?php echo $row1["email"]; ?></td>
      <td><?php echo $row1["phone"]; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>
