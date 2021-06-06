<?php

  session_start();

  if (array_key_exists("id",$_COOKIE)) {

    $_SESSION["id"] = $_COOKIE["id"];

  }

?>

<html>
<head>
  <meta charset="utf-8">
  <title>nepalvisit</title>
  <link rel="stylesheet" href="festival1.css">
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
          <li><a  href="front_page_loggedin.php">Home</a></li>
          <li><a  href="destination_loggedin.php">Destination</a></li>
          <li><a  href="adventure_sport_loggedin.php">Adventure Sports</a></li>
          <li><a  href="festival_loggedin.php">Festivals</a></li>
          <li><a  href="gallery_loggedin.php">Gallery</a></li>
          <li><a  href="faq_loggedin.php">FAQ</a></li>
          <li><a class="login_page" href="login_page.php?logout=1">log out</a></li>
        </ul>
        </div>
    </nav>

</header>

<div class="page">
  <div class="container">
    <div class="kathmandu">
        <h1 style="text-align:center">FESTIVALS</h1>
        <img src="photo/abc.jpg" alt="kathmandu" style="width:100%; height:70%;">
        <p>Festivals in Nepal are as number as there are days in a year. Blessed to be one of the most diverse countries in the world, almost everyday Nepal and Nepalese are participating in some sort of festivals and celebrations.</p>



    <div class="kathmandu">
        <h1 style="text-align:center">DASHAIN</h1>
        <div class="ktm_valley1">
          <img src="photo/dashain2.jpg" alt="Pokhara" style="width:100%; height:70%;" class="image1">
          <h7>October 23 – 27, 2020</h7>

            <p>Dashain is the most important festival to Nepalis. It is a celebration of good prevailing over evil. Most families offer male goats, ducks, chickens, eggs and coconuts to the goddess Durga. People return to their home villages and spend the fifteen-day festival with their families. Large swings are set up for children, and from the tenth day, family members receive Tika (rice, red vermillion and yoghurt) on their foreheads from their elders.</p>

      </div>
    </div>

    <div class="chitwan">
        <h1 style="text-align:center">TIHAR</h1>
          <img src="photo/kukutihar.jpg" alt="crocodile">
          <img src="photo/tihar4.png" alt="elephant">
          <img src="photo/tihar2.jpg" alt="rhino">
          <img src="destination/Chitwan/tiger.jpg" alt="tiger">
          <h7>November 13  – 17, 2020</h7>
            <p>Tihar is Nepal’s second most important festival, after Dashain. In each of the three days, a different deity is worshipped: on the first day the crow, the messenger of Yama (the bringer of death); on the second, dogs, which are believed to be Yama’s custodian; and on the third, the goddess Lakshmi is worshipped, the bringer of wealth. Lakshmi is worshipped by lighting houses with oil lamps, candles and colorful lights.</p>
    </div>

    <div class="kathmandu" class="clear">
        <h1 style="text-align:center">CHHATH</h1>
        <div class="ktm_valley1">
          <img src="photo/chatth1.jpeg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">
          <h7>November 20, 2020</h7>
          <p>Chhath is the most important festival observed in the Terai region and falls on the seventh day after Tihar. Devotees fast and make offerings to the sun by gathering at river banks. The Terai region is the best place to observe this festival or the Rani Pokhari tank in central Kathmandu.</p>

      </div>
    </div>

      <div class="kathmandu">
          <h1 style="text-align:center">LHOSAR</h1>
          <div class="ktm_valley1">
            <img src="photo/lhosar.jpg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">
            <h7>Janaury 25, 2020</h7>
            <p>Lhosar is celebrated by Nepalese ethnic groups who trace their history to Tibet, namely the Gurung, Tamang and Sherpa people. Lhosar is the first day of the new year, and each community celebrates the festival differently. Traditional dress is worn by young and old, and festivities held in cities and more remote regions.</p>

        </div>
      </div>

    <div class="kathmandu" class="clear">
        <h1 style="text-align:center">HOLI</h1>
        <div class="ktm_valley1">
          <img src="photo/holi2.jpg" alt="Annapurna" style="width:70%; height:70%;" class="image1">
      </div>
      <img src="photo/holi.jpg" alt="Annapurna" class="annapurna-image">
      <img src="photo/holi1.jpg" alt="Annapurna" class="annapurna-image">
      <h7>March 09, 2020</h7>
      <p>Holi is a very colourful and playful festival. It is celebrated in the Terai on one day, and in Kathmandu and the hill regions on the next day. People smear coloured powders on their friends, relatives and family members, and throw coloured water and water balloons. It’s important not to take any valuables out with you on this day, unless they are sealed in a plastic bag!</p>

    </div>

    <div class="sagarmatha" class="clear">
        <h1 style="text-align:center">SHIVARATRI</h1>
          <img src="photo/shivaratri.jpeg" alt="crocodile">
          <img src="photo/shivaratri1.jpeg" alt="elephant">
          <img src="photo/shivaratri2.jpg" alt="rhino">
          <h7>February 21, 2020</h7>
            <p>‘Shivaratri’ means the ‘night of Lord Shiva’. Devout Hindus bathe early in the morning and fast on this day, then visit Shiva temples. The best place to witness the festival is at the Pashupatinath temple of Kathmandu, where thousands of Sadhus (Hindu holy men) and smoke marijuana and hashish, considered dear to Lord Shiva. People also drink Bhang, a drink made by mixing ground nuts, spices, herbs and extracts of marijuana into milk.</p>
    </div>
    <div class="kathmandu">
        <h1 style="text-align:center">GHODE JATRA</h1>
        <div class="ktm_valley1">
          <img src="photo/ghodejatra.jpg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">
          <h7>March 24, 2020</h7>
          <p>Ghode Jatra is important in the Kathmandu Valley and is celebrated to ward off demonic Gurumapa. It is said the soul of the demon still lives underground at Tundikhel. To prevent him from rising again, a horse race is organised on this day by the Nepal Army.</p>

      </div>
    </div>
    <div class="kathmandu">
        <h1 style="text-align:center"> Nepali New Year (Bisket Jatra)</h1>
        <div class="ktm_valley1">
          <img src="photo/bisketjatra.jpg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">
          <h7>April 13, 2020</h7>
          <p>This is a major holiday in Nepal. A particularly lively place to spend the day is Bhaktapur, where the Bisket Jatra festival takes place. A huge chariot carrying the god Bhairab is pulled through the streets, ending with a chariot battle at Bhaktapur’s Khalna Tole.

On this day, children (including adult children!) offer sweets, fruits and gifts to their mothers to show their respect and gratitude. Those whose mothers have passed away visit Mata Tirtha in the west of Kathmandu, take a holy bath and make offerings in their mother’s memory.</p>

      </div>
    </div>
    <div class="kathmandu">
        <h1 style="text-align:center">BUDDHA JAYANTI</h1>
        <div class="ktm_valley1">
          <img src="photo/buddhajayan.jpg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">
          <h7>May 7, 2020</h7>
          <p>Buddha’s birthday falls on the first full day of the first month of the Hindu lunar calendar and is celebrated by Hindus as well as Buddhists. It is observed at Buddhist shrines and monasteries throughout Nepal, but a particularly grand ceremony is held at Buddha’s birthplace in Lumbini, on the Terai. In Kathmandu, the Tibetan enclave of Boudhanath is a particularly good place to watch the festivities.</p>

      </div>
    </div>
    <div class="kathmandu">
        <h1 style="text-align:center"> RATO MACHCHHENDRANATH</h1>
        <div class="ktm_valley1">
          <img src="photo/rato machindranath.jpg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">
          <h7>May-June 2020</h7>
          <p>This is Nepal’s longest and largest festival, held in Patan. A large chariot is built on Pulchowk Road over several weeks, and finally, the god Machchhendranath is placed inside. Three days later, the chariot begins its procession all throughout Patan and wider Lalitpur, towards Bungamati. Machchhendranath is the Newar god of rain, and the festival ushers in the monsoon.</p>

      </div>
    </div>
    <div class="kathmandu">
        <h1 style="text-align:center">JANAI PURNIMA</h1>
        <div class="ktm_valley1">
          <img src="photo/janaipurnima.jpg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">
          <h7>August 3, 2020</h7>
          <p>Janai Purnima is Sacred Thread Festival. On this day, Hindu men, especially the Brahmins and Chettris perform their annual change of Janai and all who celebrates this festival put a sacred thread around their wrist. Gosaikunda, the sacred pond in high altitude, witnesses the great celebration on this day.</p>

      </div>
    </div>

    <div class="kathmandu">
        <h1 style="text-align:center">GAI JATRA</h1>
        <div class="ktm_valley1">
          <img src="photo/gaijatra.jpg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">
          <h7>August 11, 2020</h7>
          <p>The festival’s name is Gai Jatra (literally meaning the festival of cows) and nowadays it is a fusion of three traditions that came into being in three different periods of time. The first and the oldest tradition incorporates a cult and a worship of the ancient god of death – Yamaraj. Thus, the festival marks the acceptance and celebration of death in a positive way, as an inevitable part of life. Every family who has lost a member, in the previous year, is supposed to lead a carefully and intricately decorated cow through the city. In the absence of a cow, a boy dressed as a cow (the oldest for a lost male memberand the younger for a female) can successfully take on the role.
</p>

      </div>
    </div>
    <div class="kathmandu">
        <h1 style="text-align:center">TEEJ</h1>
        <div class="ktm_valley1">
          <img src="photo/teej.jpg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">
          <h7>August 21,2020</h7>
          <p>Teej is a festival celebrated by Nepali women, for the long life of her husband and a long and firm relationship between them until the death this life and all the lives to come. Teej is observed for marital happiness, the well-being of spouse and children and purification of own body and soul. Teej is the most famous festival among Nepali women.
</p>

      </div>
    <p><h5>Note:</h5>
Hartalika Teej and Rishi Panchami are observed by females only. Ghode Jatra, Gai Jatra and Indra Jatra are observed in Kathmandu valley only. Some dates of the festivals are subject to change. In such cases, we will be updating the festival dates.</p>
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



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/wow.min.js"></script>

</body>
</html>
