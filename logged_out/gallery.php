<?php

  session_start();

  if (array_key_exists("logout", $_GET)) {
		unset($_SESSION);
		setcookie("id","",time()-60*60);
		$_COOKIE["id"] = "";
    session_destroy();
	}
  else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {

        header("Location: gallery_loggedin.php");

    }


?>

<html>
<head>
  <title>nepalvisit</title>
  <link rel="stylesheet" href="gallery1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
  </header>

<div class="page">
    <div class="kathamndu">
    <h2>Kathmandu</h2>
    <img src="destination/Kathmandu_valley/bauddha-sb-lt.jpeg" style="width:32%; height:40%; margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Kathmandu_valley/bhaktapur.jpeg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Kathmandu_valley/Kathmandu.jpeg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Kathmandu_valley/kathmandu1.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Kathmandu_valley/nepal-kathmandu-city-view.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Kathmandu_valley/patan.jpeg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Kathmandu_valley/swayambhu-leisure-1.jpeg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Kathmandu_valley/pashupatinath-sm-pilgrims.jpeg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Kathmandu_valley/tihar_kathmandu.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
  </div>

  <div class="city">
    <h2>Pokhara</h2>
    <img src="destination/Pokhara/pkr-ss-leisure.jpeg" style="width:32%; height:40%; margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Pokhara/pokhara zipline.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Pokhara/pokhara1.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Pokhara/pokhara2.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Pokhara/pokhara3.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Pokhara/pokhara4.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Pokhara/pokhara5.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Pokhara/flyingplane.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
  </div>

  <div class="city">
    <h2>Lumbini</h2>
    <img src="destination/Lumbini/lumbini.jpeg" style="width:32%; height:40%; margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Lumbini/lumbini123.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
  </div>

  <div class="city">
    <h2>Illam</h2>
    <img src="destination/Illam/ilam-csk-lt.jpeg" style="width:32%; height:40%; margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Illam/illam.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Illam/illamA.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Illam/illam-B.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
  </div>


  <div class="city">
    <h2>Langtang</h2>
    <img src="destination/Langtang/langtang1_ght.jpg" style="width:32%; height:40%; margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Langtang/langtang7.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Langtang/langtang3.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Langtang/langtang8.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Langtang/langtangnp.jpeg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
  </div>


  <div class="city">
    <h2>Manang</h2>
    <img src="destination/MustangManang/manang.jpg" style="width:32%; height:40%; margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/MustangManang/mustang_31566978182098.png" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/MustangManang/Mustang-Nepal.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/MustangManang/mustang-wvp-adventure.jpeg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/MustangManang/Upper-Mustang-Trek-Nepal.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/MustangManang/Upper-Mustang-Trek-Nepal.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
  </div>


  <div class="city">
    <h2>Lakes</h2>
    <img src="destination/Rara/rara-iw-adventure.jpeg" style="width:32%; height:40%; margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Rara/Rara-Lake.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Dolpo/phoksundo-lake-trek.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Everest/Sagarmatha National Park/gokyo.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="destination/Pokhara/pokhara1.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
  </div>

  <div class="city">
    <h2>Foods</h2>
    <img src="food/chilly_chicken.jpg" style="width:32%; height:40%; margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="food/choila.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="food/choila2.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="food/chuira_masu.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="food/fried_chicken.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="food/jhol_momo.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="food/laphing.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="food/momo.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="food/thakali_khana.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
    <img src="food/sausage.jpg" style="width:32%; height:40%;margin:8px;" onclick="onClick(this)" class="w3-hover-opacity">
  </div>


  <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img id="img01" style="width:100%">
    </div>
  </div>
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

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/wow.min.js"></script>

</body>
</html>
