<?php

  session_start();

  if (array_key_exists("logout", $_GET)) {
		unset($_SESSION);
		setcookie("id","",time()-60*60);
		$_COOKIE["id"] = "";
    session_destroy();
	}
  else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {

        header("Location: faq_loggedin.php");

    }


?>

<html>
<head>
  <meta charset="utf-8">
  <title>nepalvisit</title>
  <link rel="stylesheet" type="text/css" href="faq1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<div>
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
  </header>
</div>



<footer class="clear">
  <div class="footer-container">
      <div class="footer-content">
        <div class="footer-section 1">
          <h5>Nepal <span class="second_text">Visit</span></h5>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="JQuery/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/wow.min.js"></script>

</body>
</html>
