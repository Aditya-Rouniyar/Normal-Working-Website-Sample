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
   <link rel="stylesheet" type="text/css" href="adventure_sport1.css">
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
         <h1 style="text-align:center">ADVENTURE SPORTS</h1>
         <img src="ADsprt/main.jpg" alt="kathmandu" style="width:100%; height:70%;">
         <p>With high peaks, rolling hills, deep canyons and long rivers, there are a multitude of outdoor adventure sports you can try in Nepal. Some are practically synonymous with the country in the minds of travellers, while others might be a bit more unexpected. Read on to discover where to find your next adrenaline rush in the Himalaya.</p>



     <div class="kathmandu">
         <h3 style="text-align:left">BUNGEE JUMPING</h3>
         <div class="ktm_valley1">
           <img src="ADsprt/bungee.jpg" alt="Pokhara" style="width:100%; height:70%;" class="image1">


             <p>There are only a couple of places where you can go bungee jumping in Nepal and like almost everywhere else in the country, the views are incredible. At The Last Resort, you can fall 160 metres from a suspension bridge into the tropical Bhote Kosi River gorge. The bungee near Pokhara is not so high, at 70 metres.</p>

       </div>
     </div>

     <div class="chitwan">
         <h3 style="text-align:left">MOUNTAINEERING</h3>
           <img src="ADsprt/mount.jpg" alt="Mt.Everest" style="width:70%; height:70%;" class="image1">

             <p>While Nepal and Mount Everest go hand-in-hand for many travellers, there are many other options for mountains to climb if you’re that way inclined. Nepal is home to eight of the highest mountains in the world, some of which are an easier, cheaper and more enjoyable climb than Mount Everest. For example, Lhotse, Kanchenjunga and Cho Oyu are all above 8,000 metres and are all climbed far less often than Everest.

 However, you don’t have to choose such an extreme peak to enjoy mountaineering in Nepal. ‘Trekking peaks’ are a category of peaks that don’t require an extensive high-altitude experience (although, it helps) and the permits to climb them aren’t nearly as expensive. Highly-rated trekking peaks include Island Peak (or Imja Tse, 6,189 metres) and Mera Peak (6,476 metres).</p>
     </div>

     <div class="kathmandu" class="clear">
         <h3 style="text-align:left">TREKKING</h3>
         <div class="ktm_valley1">
           <img src="ADsprt/trek.jpeg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">

           <p>Nepal’s trekking trails will turn any hiker into the most sedate, urban traveller. There are options for many levels of fitness and all interests – from multi-day expeditions, like the Annapurna Circuit and Upper Dolpo to cultural treks, like the Tamang Heritage Trail and easier homestay treks, like the Annapurna Community Eco-Lodge trek.

 The rewards and challenges vary from route to route, but you can expect to see stunning snow-capped peaks, rural communities, vibrant farmland, shady forests, icy streams and plenty of wilderness. Although it’s not always necessary to trek with a guide (it’s only a requirement on certain restricted routes), it’s generally a good idea to do so, for your own safety.</p>

       </div>
     </div>

       <div class="kathmandu">
           <h3 style="text-align:left">RAFTING</h3>
           <div class="ktm_valley1">
             <img src="ADsprt/raft.jpg" alt="Mt.Everest" style="width:70%; height:70%;" class="image1">

             <p>Nepal is rated as one of the best destinations in the world for multi-day white-water rafting trips. There are numerous long stretches of clean, bouncy river flanked by sandy beaches, forested hills and rural settlements. Everything from one-day trips from Pokhara and Kathmandu suitable for beginners to 12-day rafting, trekking and kayaking multi-trips are available in Nepal. Spend your days bouncing along refreshing rivers and your nights camping on beaches under the stars.

 And one of the best parts? Like almost everything in Nepal, white-water rafting expeditions are much cheaper here than you’ll find in most developed countries.</p>

         </div>
       </div>

     <div class="kathmandu" class="clear">
         <h3 style="text-align:left">KAYAKING</h3>
         <div class="ktm_valley1">
                 </div>
       <p>Where there are white-water rapids good for rafting there are also white-water rapids good for kayaking. On many of Nepal’s rafting trips, you’ll find an even split between rafters and kayakers. But, kayakers have the added benefit of being able to navigate stretches of the river that rafts cannot, so there are even more options for adventurous kayakers.

 Nepal is also a great place to learn to kayak, with kayak clinics offered just a short drive from Kathmandu and Pokhara.</p>

     </div>

     <div class="sagarmatha" class="clear">
         <h3 style="text-align:left">ROCK CLIMBING</h3>
           <img src="ADsprt/rckclm.jpg"alt="Mt.Everest" style="width:50%; height:50%;" class="image1">
             <p>Rock climbing
 Rather than going full-on mountain climbing, shorter rock-climbing excursions can also be enjoyed. In Kathmandu, there is the Astrek Climbing Wall in Thamel, an artificial wall to practice climbing skills. There are other natural climbing spots around Kathmandu, such as at Pharping and Nagarjuna, which are frequented by city-based climbers. Then, of course, there are the endless unknown spots throughout the mountains, but proper gear and experience are required before setting off solo.</p>
     </div>

     <div class="kathmandu">
         <h3 style="text-align:left">ZIP-LINING</h3>
         <div class="ktm_valley1">
           <img src="ADsprt/zip.jpg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">

           <p>Pokhara was home to the world’s longest zip-line until the UAE took that honour earlier in 2018! But, at 1.8 kilometres long and reaching speeds of 120km/ph, we don’t think Nepal’s zip-line is second to anything!</p>

       </div>
     </div>
     <div class="kathmandu">
         <h3 style="text-align:left"> VESPA CITY TOUR</h3>
         <div class="ktm_valley1">
           <img src="ADsprt/vespa.jpg" alt="Mt.Everest" style="width:80%; height:70%;" class="image1">

           <p>Zipping around Kathmandu on the back of a moped might not seem like an adventure sport – until you experience the Kathmandu traffic, that is! Kathmandu tour company Vespa Valley offers tours of interesting sights in the city, such as street art or street food, from the back of a vintage-style Vespa. Rather than taking your life into your own hands by driving in the capital, place it trustingly in the hands of one of Vespa Valley’s drivers!</p>

       </div>
     </div>
     <div class="kathmandu">
         <h3 style="text-align:left">CANYON SWING</h3>
         <div class="ktm_valley1">


           <p>There’s just one place to try canyon swinging in Nepal, at The Last Resort on the Bhote Kosi River. It’s the same height as the bungee – 160 metres – as it takes off from the same suspension bridge. But instead of diving head first towards the river, visitors free fall face-first for several seconds before swinging from cables fixed to the sides of the canyon. Speeds of 150km/ph can be reached!</p>

       </div>
     </div>
     <div class="kathmandu">
         <h3 style="text-align:left">PARAGLIDING</h3>
         <div class="ktm_valley1">
           <img src="ADsprt/paragl.jpg" alt="Mt.Everest" style="width:100%; height:70%;" class="image1">

           <p>With the snow-capped Annapurna Himalaya in one direction, terraced farmland immediately below and the city of Pokhara and Phewa Tal below, it’s hard to imagine a better spot for paragliding anywhere in the world. And, the thermals (warm air currents) from Sarangkot Hill make this a consistently good take-off point for paragliding. Another good paragliding spot in Nepal is around Bandipur.</p>

       </div>
     </div>
     <div class="kathmandu">
         <h3 style="text-align:left">MOUNTAIN BIKING</h3>
         <div class="ktm_valley1">
           <img src="ADsprt/bike.jpg" alt="Mt.Everest" style="width:90%; height:70%;" class="image1">

           <p>Many trekking trails, both short and long, are also suitable for mountain biking. Be prepared to carry your bike at certain points, such as over icy patches or up steps. For shorter biking adventures, there are numerous trails around the outside of the Kathmandu Valley or the circuit around Phewa Tal in Pokhara.</p>

       </div>
     </div>

     <div class="kathmandu">
         <h3 style="text-align:left">ICE CLIMBING</h3>
         <div class="ktm_valley1">
           <img src="ADsprt/ice.jpg" alt="Mt.Everest" style="width:90%; height:70%;" class="image1">

           <p>If ordinary rock climbing sounds a bit boring, how about chipping your way up a frozen waterfall? This activity is best done in winter, for obvious reasons, and should always be done with an experienced guide or others who know what they’re doing. The village of Humde, near Besisahar in the Annapurna region, is a particularly good place to visit to try this sport.</p>
 </p>

       </div>
     </div>
     <div class="kathmandu">
         <h3 style="text-align:center">CANYONING</h3>
         <div class="ktm_valley1">
           <img src="ADsprt/Canyoning.jpg" alt="Mt.Everest" style="width:80%; height:70%;" class="image1">

           <p>If lowering yourself backwards off a waterfall and sliding down natural water slides sounds like fun, then Nepal is a good place to be. Season dependent (with the strongest flow immediately after the monsoon and the lowest immediately before), guided canyoning trips can be arranged around Jalberi, about half-way between Kathmandu and Pokhara and on the Bhote Kosi River, northeast of Kathmandu.
 </p>

       </div>

 </div>
 </div>
 <br />
 <br /><br />
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
