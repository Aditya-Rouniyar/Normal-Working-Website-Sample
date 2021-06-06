<?php

  session_start();

  if (array_key_exists("logout", $_GET)) {
		unset($_SESSION);
		setcookie("id","",time()-60*60);
		$_COOKIE["id"] = "";
    session_destroy();
	}
  else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {

        header("Location: destination_loggedin.php");

    }


?>

<html>
<head>
  <meta charset="utf-8">
  <title>nepalvisit</title>
  <link rel="stylesheet" href="destination1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

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
      <p class="typewriter" class="wow heartBeat">BIRTHPLACE OF LORD BUDDHA</P>
    </div>
    </div>
</header>

<div class="page">
  <div class="container">
    <div class="kathmandu">
        <h1 style="text-align:center">KATHMANDU</h1>
        <img src="destination/kathmandu_valley/kathmandu1.jpg" alt="kathmandu" style="width:100%; height:70%;">
        <h3>Kathmandu, the capital of Nepal is a melting pot of cultures and a rich mix of the east and west, the old and the new, where tradition jostles with modernity.</h3>

        <div class="ktm_valley">
          <img src="destination/kathmandu_valley/tihar_kathmandu.jpg" alt="Kathamndu valley" class="image">
          <div class="overlay">
            <div class="text">Founded in a vast valley after draining a larges....<a href="">read more</a></div>
          </div>
      </div>

          <div class="ktm_valley">
            <img src="destination/kathmandu_valley/bhaktapur.jpeg" alt="Bhaktapur" class="image" >
            <div class="overlay">
              <div class="text">Among the three major cities of Kathmandu Valley....<a href="">read more</a></div>
            </div>
        </div>

        <div class="ktm_valley">
          <img src="destination/kathmandu_valley/patan.jpeg" alt="Patan" class="image" >
          <div class="overlay">
            <div class="text">Patan is 5 km away from the capital city, Kathmandu, and is....<a href="">read more</a></div>
          </div>
      </div>
    </div>

    <div class="kathmandu">
        <h1 style="text-align:center">Pokhara</h1>
        <div class="ktm_valley1">
          <img src="destination/Pokhara/pokhara1.jpg" alt="Pokhara" style="width:100%; height:70%;" class="image1">
          <div class="overlay1">
            <div class="text">Pokhara is Nepal's number 1 adventure and leisure destination, a gateway to treks in the Annapurna region with plenty of entertainment for individual travellers and their families. ....<a href="https://en.wikipedia.org/wiki/Pokhara">read more</a></div>
          </div>
      </div>
    </div>

    <div class="chitwan">
        <h1 style="text-align:center">Chitwan</h1>
          <img src="destination/Chitwan/crocodile.jpg" alt="crocodile">
          <img src="destination/Chitwan/elephant.jpg" alt="elephant">
          <img src="destination/Chitwan/rhino.jpg" alt="rhino">
          <img src="destination/Chitwan/tiger.jpg" alt="tiger">
          <h3>CHITWAN NATIONAL PARK</h3>
            <p>In the southern region of Nepal, the jungles of Chitwan National Park await you with wildlife experiences like no other. Go in search of the majestic Royal Bengal tiger and watch the Greater one-horned rhinoceros roam free, while the great Asiatic elephants move about the jungles in herds.  Chitwan National Park is the closest and the ideal place to go for wildlife safari.
              Witness real wilderness in the jungles of Chitwan: go for a jeep safari in the depths of the forest or ride a silent canoe and catch wildlife by surprise. Go for a jungle walk accompanied by an experienced guide who knows the jungle like the back of his hand......<a href="">read more</a></p>
    </div>

    <div class="kathmandu" class="clear">
        <h1 style="text-align:center">MOUNTAINEERING IN NEPAL</h1>
        <div class="ktm_valley1">
          <img src="destination/Mountaineering/mountaineering-in-nepal.jpeg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">
          <div class="overlay1">
            <div class="text">With eight of the world's highest mountains in the country, Nepal is a mountaineer's paradise. The ultimate glory of  mountaineering is reaching the summit of Mt. Everest, but there are other technical challenges like Lhose beside it or you can take on any of the other 326 climbing peaks that are waiting for you!.....<a href="">read more</a></div>
          </div>
      </div>
    </div>

      <div class="kathmandu">
          <h1 style="text-align:center">Climb Everest if you want to stand on top of the world, or do the extremely popular Everest Base Camp Trek to enter a strange world of ice and snow.</h1>
          <div class="ktm_valley1">
            <img src="destination/Everest/everest2.jpg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">
            <div class="overlay1">
              <div class="text">Reach the highest point on earth or choose to live out your dream by standing at the foot of Mt. Everest (8,848 m).
The Everest region in Nepal is more than just climbing and trekking, it is a life changing experience and some see it as a journey close to achieving.....<a href="">read more</a></div>
            </div>
        </div>
      </div>

    <div class="kathmandu" class="clear">
        <h1 style="text-align:center">Trek around the Annapurnas “one of the best trekking trails in the world”</h1>
        <div class="ktm_valley1">
          <img src="destination/Annapurna/annapurna-circuit.jpg" alt="Annapurna" style="width:100%; height:70%;" class="image1">
          <div class="overlay1">
            <div class="text">Trek in the beautiful and diverse landscape around the Annapurnas, one of the best trekking trails in the....<a href="">read more</a></div>
          </div>
      </div>
      <img src="destination/Annapurna/annapurna1.jpg" alt="Annapurna" class="annapurna-image">
      <img src="destination/Annapurna/annapurna2.jpg" alt="Annapurna" class="annapurna-image">
    </div>

    <div class="sagarmatha" class="clear">
        <h1 style="text-align:center">SAGARMATHA NATIONAL PARK</h1>
          <img src="destination/Everest/Sagarmatha National Park/everest-mp-adventure.jpeg" alt="crocodile">
          <img src="destination/Everest/Sagarmatha National Park/gokyo.jpg" alt="elephant">
          <img src="destination/Everest/Sagarmatha National Park/yak.jfif" alt="rhino">
            <h5>Sagarmatha National Park is home to the highest peak in the world - Mt. Everest (8,848 m), Sagarmatha being the Nepali name for Everest. The area was designated a national park in 1976 and encompasses several other peaks all above 6,000 m. The park got recognition as a World......<a href="">read more</a></h5>
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
