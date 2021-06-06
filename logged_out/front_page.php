<?php

  session_start();

  if (array_key_exists("logout", $_GET)) {
		unset($_SESSION);
		setcookie("id","",time()-60*60);
		$_COOKIE["id"] = "";
    session_destroy();
	}
  else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {

        header("Location: front_page_loggedin.php");

    }


?>

<html>
<head>

  <meta charset="utf-8">
  <title>nepalvisit</title>
  <link rel="stylesheet" href="front_page1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <header>
    <nav>
      <div class="first_tab">
        <ul>
          <li><a  href="front_page.php">Home</a></li>
          <li><a  href="destination.php">Destination</a></li>
          <li><a  href="adventure_sport.php">Adventure Sports</a></li>
          <li><a  href="festival.php">Festivals</a></li>
          <li><a  href="gallery.php">Gallery</a></li>
          <li><a  href="faq.php">FAQ</a></li>
          <li><a class="login_page" href="login_page.php">Login</a></li>
        </ul>
        </div>
    </nav>
      <div class="clear">
      <div class="second_tab">
        <img class="flag_img" src="flag_of_nepal.png" alt="Check your connection">
        <p class="typewriter" style="margin-top:300px;">EXPERIENCE OF A LIFETIME!!!</P>
      </div>
    </div>
</header>

<div class="page">
  <div id="third_part" >
          <p class="WOW flash infinite">EXPLORE</p>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style=" width:80%; margin:auto;">
      <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block" src="photo/pokhara2.jpg" alt="First slide" height=600px width= 1500px>
      <div class="carousel-caption d-none d-md-block">
      <h5 class="text">POKHARA</h5>
      <blockquote class="small_text">City of lakes</blockquote>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block" src="photo/kathmandu1.jpg" alt="Second slide" height=600px width= 1500px>
      <div class="carousel-caption d-none d-md-block">
      <h5 class="text">Kathmandu</h5>
      <blockquote class="small_text">City of temples</blockquote>
  </div>
  </div>

    <div class="carousel-item">
      <img class="d-block" src="photo/chitwan4.jpg" alt="Third slide" height=600px width= 1500px>
      <div class="carousel-caption d-none d-md-block">
      <h5 class="text">Chitwan</h5>
      <blockquote class="small_text"></blockquote>
      </div>
    </div>

      <div class="carousel-item">
        <img class="d-block" src="photo/Mount-Everest2.jpg" alt="Forth slide" height=600px width= 1500px>
        <div class="carousel-caption d-none d-md-block">
        <h5 class="text">Mount Everest</h5>
        <blockquote class="small_text">World's tallest peak</blockquote>
    </div>
  </div>

    <div class="carousel-item">
      <img class="d-block" src="photo/manang.jpg" alt="Fifth slide" height=600px width= 1500px>
      <div class="carousel-caption d-none d-md-block">
      <h5 class="text">Mustang</h5>
      <blockquote class="small_text">Desert of Nepal</blockquote>
  </div>
  </div>

  <div class="carousel-item">
    <img class="d-block" src="photo/bungy-jumping.jpg" alt="Sixth slide" height=600px width= 1500px>
    <div class="carousel-caption d-none d-md-block">
    <h5 class="text">Bungee Jumping</h5>
    <blockquote class="small_text"></blockquote>
  </div>
  </div>

  <div class="carousel-item">
    <img class="d-block" src="photo/rafting.jpg" alt="Seventh slide" height=600px width= 1500px>
    <div class="carousel-caption d-none d-md-block">
    <h5 class="text">Rafting</h5>
    <blockquote class="small_text"></blockquote>
  </div>
  </div>

  <div class="carousel-item">
    <img class="d-block" src="photo/illam.jpg" alt="Eighth slide" height=600px width= 1500px>
    <div class="carousel-caption d-none d-md-block">
    <h5 class="text">Illam</h5>
    <blockquote class="small_text">Tea Garden of Nepal</blockquote>
  </div>
  </div>

  <div class="carousel-item">
    <img class="d-block" src="photo/langtang.jpg" alt="Ninth slide" height=600px width= 1500px>
    <div class="carousel-caption d-none d-md-block">
    <h5 class="text">Langtang</h5>
    <blockquote class="small_text">A narrow Sandwitched Valley</blockquote>
  </div>
  </div>

  <div class="carousel-item">
    <img class="d-block" src="photo/lumbini.jpg" alt="Tenth slide" height=600px width= 1500px>
    <div class="carousel-caption d-none d-md-block">
    <h5 class="text">Lumbini</h5>
    <blockquote class="small_text">Birthplace of Lord Buddha</blockquote>
  </div>
  </div>

  <div class="carousel-item">
    <img class="d-block" src="photo/annapurna-circuit-trek.jpg" alt="Eleven slide" height=600px width= 1500px>
    <div class="carousel-caption d-none d-md-block">
    <h5 class="text">Annapurna</h5>
  </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  </div>
</div>
</div>

<footer class="clear">
<div class="footer-container">
    <div class="footer-content">
      <div class="footer-section 1">
        <h5>VISIT <span class="second_text">NEPAL</span></h5>
        <p>The traveler sees what he sees, The tourist sees what he has come to see.
           Heaven is myth, Nepal is real.</p>
        <div class="contact">
          <span><i class="fa fa-phone"></i>+977-9860080153</span>
          <br>
          <span><i class="fa fa-envelope"></i>info@nepalvisit.com</span>
      </div>
      <div class="socials">
        <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
        <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
        <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
        <a href="http://www.youtube.com"><i class="fa fa-youtube"></i></a>
    </div>
  </div>
      <div class="footer-section 2">
        <center>
        <img src="me.jpg">
        <h3>Aditya Rouniyar</h3>
        <a href="http://www.facebook.com/theadityarouniyar"><i class="fa fa-facebook"></i></a>
        <a href="http://www.instagram.com/theadityarouniyar"><i class="fa fa-instagram"></i></a>
      </center>
      </div>
      <div class="footer-section 3">
        <center>
        <img src="suddo.jpg">
        <h3>Abyakta Koirala</h3>
        <a href="http://www.facebook.com/cr7.abyakta"><i class="fa fa-facebook"></i></a>
        <a href="http://www.instagram.com/abyakta7"><i class="fa fa-instagram"></i></a>
      </center>

      </div>
    </div>
    <div class="footer-right">
      <h5> ©Copyright-nepalvisit.com | Developed by Abyakta Koirala and Aditya Rouniyar
    </div>
</div>
</footer>

<script type="text/javascript">
var textWrapper = document.querySelector('.typewriter');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.typewriter .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: (el, i) => 150 * (i+1)
  }).add({
    targets: '.typewriter',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

</body>
</html>
