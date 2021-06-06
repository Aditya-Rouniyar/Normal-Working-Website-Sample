<?php
  session_start();
  $error = "";

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

   if (!$_POST["fname"]) {
     $error .="Enter the first name<br>";
   }

   if (!$_POST["lname"]) {
     $error .="Enter the last name<br>";
   }

   if (!$_POST["email"]) {
     $error .="An email is required<br>";
   }

		if (!$_POST["pnumber"]) {
			$error .="Phone number is required<br>";
		}

    if (!$_POST["country"]) {
      $error .="Country is required<br>";
    }

		if(!$_POST["password"]) {
			$error .="A password is required<br>";
		}

		if($error !="") {
			$error = "There was an error<br>".$error;
		}
		else {
					$query = "SELECT id FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

					$result = mysqli_query($link, $query);

					if(mysqli_num_rows($result) > 0) {
						$error = 'The email is already used Please select another one';
					}
			    else {
  					$query ="INSERT INTO users (fname,lname,email,pnumber,country,password) VALUES ('".mysqli_real_escape_string($link, $_POST['fname'])."',
                                                                                            '".mysqli_real_escape_string($link, $_POST['lname'])."',
                                                                                            '".mysqli_real_escape_string($link, $_POST['email'])."',
                                                                                            '".mysqli_real_escape_string($link, $_POST['pnumber'])."',
                                                                                            '".mysqli_real_escape_string($link, $_POST['country'])."',
                                                                                            '".mysqli_real_escape_string($link, $_POST['password'])."' )";

  					if (!mysqli_query($link, $query)) {
  						$error = "Couldn't sign in";
  					}
  				  else {
  						$query = "UPDATE users SET password = '".md5(md5(mysqli_insert_id($link)).$_POST["password"])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";

              mysqli_query($link, $query);

  						$_SESSION['id'] = mysqli_insert_id($link);

              if ( $_POST["loggedIn"] == '1') {
  							setcookie ("id",mysqli_insert_id($link),time()+60*60*24*364);
              }

  						header("Location: front_page_loggedin.php");

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="signup_page.css">
</head>

<body>
]<div class="container">
	<h1>Sign Up</h1>

  <div><?php if($error!="") {
			 echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
			}?>
</div>

<form method="post">

  <p><strong>To know more about Nepal just sign up</strong></p>

  <fieldset class="form-group">
  <input class="form-control" type="text" name="fname" placeholder="First Name">
 </fieldset>

 <fieldset class="form-group">
  <input class="form-control" type="text" name="lname" placeholder="Last Name">
 </fieldset>

 <fieldset class="form-group">
	  <input class="form-control" type="text" name="email" placeholder="email@gamil.com">
	</fieldset>

  <fieldset class="form-group">
   <input class="form-control" type="text" name="pnumber" placeholder="Phone Number">
  </fieldset>

  <fieldset class="form-group">
   <input class="form-control" type="country" name="country" placeholder="country">
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
      <input type="hidden" name="signup" value="1">
			<input class="btn btn-success" type="submit" name="submit" value="Sign Up">
		</fieldset>

		</form>
    <a href="login_page.php">Log In</a>

</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
