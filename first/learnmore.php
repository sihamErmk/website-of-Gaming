<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Association Of gaming</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <img src="./_LOGO HD.png" alt="Week Logo">
            </div>
            <ul class="menu">
    <li><a href="./index.php#home" class="menu-btn">Home</a></li>
    <li><a href="./index.php#event" class="menu-btn">Events</a></li>
    <li><a href="./index.php#games" class="menu-btn">Games</a></li>
    <li><a href="./index.php#about" class="menu-btn">About</a></li>
    <li><a href="./index.php#contact" class="menu-btn">Contact</a></li>
</ul>

            <div class="menu-btn">
                 <div class="menu-btn">&#9776;</div>
            </div>
        </div>
    </nav>
    <section class="bacground">
      <?php 
      $conn=mysqli_connect('localhost','root','','assoc');
      if(isset($_GET['selectedid'])){
        $event_id=$_GET['selectedid'];
        $sql="select * from events where event_id='$event_id' ";
        $qry=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($qry);
        ?>
        <div class="banner">
          <div class="left-column">
       <h1><?php echo $row['event_title'] ?></h1>
       <p><?php echo $row['para'] ?></p>
       <h3> 📅 the date of event : <span><?php echo $row['startdate'] ?></span></h3>
       <h3> 📅 the time of event :  <span><?php echo $row['starttime'] ?></span></h3>
       <h3>📍 Place of event :  <span><?php echo $row['loc'] ?></h3>
       <h5>Registration for the tournament is now open –  join the excitement!</h5>
       <a href="<?php echo $row['formulaLink'] ?>" class="button">Registre</a>
      </div>
      <div class="right-column">
      <img src="../images/<?php echo $row['img'] ?>" alt=""> 
      </div>
        <?php
      }
      ?>
    
    </div>
    </section>
    <footer class="footer">
   
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="./index.php#home">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="./index.php#event">Events</a></li>
      <li class="menu__item"><a class="menu__link" href="./index.php#games">Games</a></li>
      <li class="menu__item"><a class="menu__link" href="./index.php#about">About</a></li>
      <li class="menu__item"><a class="menu__link" href="./index.php#contact">Contact</a></li>

    </ul>
    <p>&copy;2024 Association of gaming | All Rights Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>