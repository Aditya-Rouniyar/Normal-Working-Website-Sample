<?php
  session_start();
  $error="";
  $modifiedpassword="";

  if (array_key_exists("logout", $_GET)) {
		unset($_SESSION);
		setcookie("id","",time()-60*60);
		$_COOKIE["id"] = "";
    session_destroy();
	}
  else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {

        header("Location: front_page_loggedin.php");

    }

  if (array_key_exists("submit", $_POST)) {

    $link = mysqli_connect ("localhost","ady","ady1","visitnepal");

   if (mysqli_connect_error()) {
     die("Connection Unsuccessful");
   }

    if (!$_POST["email"]) {
      $error .="An email is required<br>";
    }

    if(!$_POST["password"]) {
      $error .="A password is required<br>";
    }

    if($error !="") {
      $error = "<p>There was an error</p>".$error;
    }
    else {
      $query = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' ";

					$result = mysqli_query($link,$query);

					$row = mysqli_fetch_array($result);

					if (isset($row)) {

						$modifiedpassword = md5(md5($row["id"]).$_POST["password"]);

						if ($modifiedpassword == $row["password"]) {

							$_SESSION['id'] = $row['id'];

								if ( $_POST["loggedIn"] == '1') {

									setcookie("id", mysqli_insert_id($link), time()+60*60*24*364);
								}

								header("Location: front_page_loggedin.php");
						}
						else {

							$error = "Incorrect email/password<br>Please Try Again";
						}
					}
				}
		}
 ?>

<!doctype html>
<html lang="en">
<head>
    <title>nepalvisit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="login_page1.css">
</head>

<body>

  <nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-light">
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
</nav>

]<div class="container" id="homepagecontainer">
	<h1>Log In</h1>
  <p><strong>To know more about Nepal just sign up</strong></p>
<div><?php if($error!="") {
			 echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
			}?>
</div>
<form method="post">
  <fieldset class="form-group">
	   <input class="form-control" type="text" name="email" placeholder="email@gamil.com">
	</fieldset>

	<fieldset class="form-group">
      <input class="form-control" type="password" name="password" placeholder="password">
  </fieldset>

	<div class="checkbox">
		<label>
			<input type="checkbox" name="loggedIn" value=1>Stay Logged In
		</label>
	</div>


		 <fieldset class="form-group">

			<input class="btn btn-success" type="submit" name="submit" value="Log In">

		</fieldset>
		</form>
    <a href="signup_page.php">Sign Up</a>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
 </ht>
