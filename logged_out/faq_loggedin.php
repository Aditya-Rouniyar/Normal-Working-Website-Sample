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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">

  html , body {
       margin:0;
       padding:0;
       font-family:Helvetica, Arial, sans-serif;
  }

  .clear {
    clear:both;
  }

  ul {
    list-style-type: none;
    width:100%;
    overflow: hidden;
    background: linear-gradient(90deg, rgba(192,192,192, 0) 0%, rgba(255, 255, 255, 0.2) 25%, rgba(255, 255, 255, 0.2) 75%, rgba(255, 255, 255, 0) 100%);
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
    position: fixed;
    z-index: 2;
  }

  ul li {
    float:left;
  }

  li a {
    display: block;
    font-size: 23px;
    color: white;
    padding:10px;
    text-decoration: none;
    opacity: 1;
  }

  li a:hover {
    background-color: #385898;
    border:2px solid #385898;
    text-decoration: none;
    color:white;
  }

  .login_page {
    color: #f2f2f2;
    margin-left:700px;
  }

  .page{
    background-color: #A4A4A4;
  }

  .comment_section{
    margin: auto;
    width: 80%;
  }

  h2{
    font-weight: bold;
    padding-top: 50px;
  }

  .user{
    font-weight: bold;
  }

  .time{
    color: #777675;
  }

  .reply{
    margin-left: 20px;
  }

  .reply .comments{
    margin-top: 10px;
  }

  .rpy-button:hover{
    text-decoration: underline;
  }

  .footer-section {
    margin: auto;
    width: 50%;
    margin-left: 20px;
  }

  .footer-content{
    background-color:#595959;
    color:white;
    height:300px;
    position: relative;
    display: flex;
  }


  .footer-right{
    background-color:  #737373;
    color: white;
    width: 100%;
    text-align: center;
    position: absolute;
  }

  .footer-section h5{
    color:red;
    font-weight: bold;
    font-size: 32px;
  }

  .footer-section .second_text{
    color:blue;
    font-weight: bold;
  }


  .footer-section img{
    width: 45%;
    height: 53%;
    border-radius:50%;
    border: 5px solid #d1eb2f;
  }

  .contact i{
    padding: 6px;
  }

  .footer-section a{
    color: white;
    font-size:20px;
    padding:3px;
  }


  </style>
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
            <li><a class="login_page" href="login_page.php?logout=1">log out</a></li>
          </ul>
        </div>
    </nav>
  </header>
</div>

<div class="page">
  <div class="comment_section">
    <h2>If any queires you may ask any question</h2>
    <div class="row">
      <div class="col-md-12">
        <textarea class="form-control" placeholder="Add Question" rows="3" cols="80"></textarea><br>
        <button class="btn btn-primary" style="float: right;">POST</button>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h3>4 Comments</h3>



        <div class="userscomments">
          <div class="comments">
            <div class="user">Aditya Rouniyar<span class="time">2020/07/24</span></div>
            <div class="usercomment">How far is kathmandu from Pokhara?</div>
            <div class="rpy-button"> <strong>reply</strong> </div>
            <div class="reply">
              <div class="comments">
                <div class="user">Abyakta Koirala<span class="time">2020/07/24</span></div>
                <div class="usercomment">It's like 200Km. Like a 6 hrs drive.</div>
              </div>
            </div>
          </div>
        </div>

        <br><br>

        <div class="userscomments">
          <div class="comments">
            <div class="user">Abyakta Koirala<span class="time">2020/07/24</span></div>
            <div class="usercomment">How long does Annapurna trek take to complete?</div>
            <div class="rpy-button"> <strong>reply</strong> </div>
            <div class="reply">
              <div class="comments">
                <div class="user">Aditya Rouniyar<span class="time">2020/07/24</span></div>
                <div class="usercomment">It takes about 10 to 12 days minimum.</div>
              </div>
            </div>
          </div>
        </div>

      <br>


      </div>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="JQuery/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/wow.min.js"></script>

</body>
</html>
