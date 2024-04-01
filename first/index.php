<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="LOGO BLEU V.png" type="image/png">
    <title>Association Of gaming</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
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
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#event" class="menu-btn">Events</a></li>
                <li><a href="#games" class="menu-btn">Games</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#team" class="menu-btn">Team</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                 <div class="menu-btn">&#9776;</div>
            </div>
        </div>
    </nav>
    <div class="img-container" id="home" >
        <img src="./back.png" alt="">
        <div class="overlay">
            <div class="text">
                Association Of Gaming
            </div>
            <div class="sub-text">Feel free to adjust the words to better fit the vibe and purpose of your gaming Association.</div>
        </div>
        <div class="card">
            <p>+5 Developors</p>
            <hr>
            <p>+5 Designers</p>
            <hr>
            <p>+20 Games</p>
            <hr>
            <p>+500 Users</p>
            <hr>
            <a href="#" class="button">Get Started</a>
        </div>
    </div>
<!-- News Section  -->
<section id="event">
<div class="news">
    <div class="news-title" >
        <h1 >Lastest News</h1>
    </div> 
<div class="container">
        <div class="card-content">
            <?php 
            $conn=mysqli_connect('localhost','root','','assoc');
            $sql="select * from events ";
            $qry=mysqli_query($conn,$sql);
            if($qry){
                while($row=mysqli_fetch_assoc($qry)){
                    ?>
                     <div class="card1">
                        <div class="card-image">
                            <img src="../images/<?php echo $row['img'] ?>" alt="">   
                        </div>
                        <div class="card-info">
                           <h3><?php echo $row['event_title'] ?></h3>
                           <h5 ><?php echo $row['event_desc'] ?></h5>
                           <a href="learnmore.php?selectedid=<?php echo $row['event_id']; ?>" class="button">Learn more</a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
            </div> 
       </div>
   </div>
</section>

<!--Gaming section -->
<section  id="games">
<div class="Games" >
    <div class="game-title">
                <h1>Games</h1>
                <p>
                  Games encompass a diverse array of interactive experiences,
                  ranging from immersive narratives to strategic challenges, 
                  designed to entertain,
                  challenge, and inspire players worldwide.
                </p>
    </div>
    <div class="container">
        <div class="card-content">
    <?php 
    $conn=mysqli_connect('localhost','root','','assoc');
    $sql="select * from games ";
    $qry=mysqli_query($conn,$sql);
    if($qry){
        while($row=mysqli_fetch_assoc($qry)){
            ?>
            <div class="card1">
            <div class="card-image">
             <img src="../images/<?php echo $row['game_img'] ?>" alt="">   
            </div>
            <div class="card-info">
                <h3><?php echo $row['game_name'] ?></h3>
                <p><?php echo $row['game_title'] ?></p>
                <a href="<?php echo $row['game_website'] ?>" class="button">Learn more</a>
            </div>
            </div>
            

            <?php 

        }
    }
    ?>
</div>
</div>
</section>

 <!--<div class="about-item text-center">
                        <i  class="fa fa-book"></i>-->
<!--About section -->

<section class ="about" id="about">
<div class="heading">
    <h1>About Us</h1>
    <p>Immerse yourself in our world where gaming isn't just a pastime, it's a passion; where every pixel, every click, and every victory tells a story of dedication and camaraderie.
   
    </p>
</div>
<div class="about-us">
    <img src="./_LOGO HD.png">
    <div class="content">
        <h2>Association of games</h2>
        <p>"Step into our immersive realm where gaming transcends mere pastime to become a profound passion; where every meticulously crafted pixel, every deliberate click, and every hard-fought victory narrates a tale of unwavering dedication and unbreakable camaraderie. Here, within the digital expanse, bonds are forged, challenges are conquered, and triumphs are celebrated as monuments to the collective spirit of gamers united in their pursuit of excellence. Join us and delve into a world where gaming isn't just an activity—it's a journey of shared experiences, boundless creativity, and limitless possibilities."</p>
    </div>

</div>

    
</section>
<!---meet our time -->
<section id ="team">
     <div class="wrapper1">
        <h1>Our Team</h1>
        <div class="team">
            <div class="team_member">
                <div class="team_img">
                    <img src="./1.png" alt="">
                </div>
                <h3>Omaima Boughdad</h3>
              <p class="role">UI developer</p>
              <p > coe funder coe djekstra and it was os cuoedos and hit e lde f opsnoejd  lsje uc : djeue fle ids ks csmz ap sjdiq sqj zamlljd sn,skzud

              </p>
     
            </div>
            <div class="team_member">
            <div class="team_img">
                    <img src="./2.png" alt="">
                </div>
                <h3>Aziz mahbob</h3>
              <p class="role">Support leader</p>
              <p > coe funder coe djekstra and it was os cuoedos and hit e lde f opsnoejd  lsje uc : djeue fle ids ks csmz ap sjdiq sqj zamlljd sn,skzud

              </p>
     
            </div>
            <div class="team_member">
            <div class="team_img">
                    <img src="./3.png" alt="">
                </div>
                <h3>Siham EL kouaze</h3>
              <p class="role">Testeur</p>
              <p > coe funder coe djekstra and it was os cuoedos and hit e lde f opsnoejd  lsje uc : djeue fle ids ks csmz ap sjdiq sqj zamlljd sn,skzud
              </p>
     
            </div>
    
        </div>
     </div>
</section>

<!-- Contact -->
<section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title"></h2>
            <div class="contact-content">
                <div class="column left">
                    
                    <p>Feel free to reach out to Association of Gaming for any inquiries, collaboration requests, or just to say hello. Simply fill out the form below, and we'll get back to you as soon as possible.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Association Of Gaming</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">FST Tanger</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">selkouaze@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text"></div>
                    <form action="mailto:selkouaze@gmail.com" method="post" enctype="text/plain">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="Name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="Email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="Subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea name="Message" cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


 <!-- footer-->
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
<script src="script.js"></script>
</body>
    
</body>
</html>
