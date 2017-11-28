<?php
  session_start();
  if (ISSET($_SESSION["username"])) {
    $name = $_SESSION["username"];
    }
  else {
    $name= "No name provided.";
  }

  if (ISSET($_SESSION["usermail"])) {
    $email = $_SESSION["usermail"];
    }
  else{
    $email = "No email provided.";
  }

  if (ISSET($_SESSION["msg"])) {
    $message = $_SESSION["msg"];
    }
  else{
    $message = "No message inputted.";
  }
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>That's How I Roll</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
</head>
<body id="submitted-page">

  <?php
   include "includes/header-navigation.php";
  ?>

  <div class="page-title">
    <h1> Contact Us</h1>
  </div>


  <div class="sushi-icon-page">
    <img class="page-sushi" alt="Sushi Icon" src="images/home-sushi.jpg"/>
  </div>
  <br/>

  <div id="submitted-contact-info">
    <h2> Phone Number: </h2>
    <h3> (607) 339-1238 </h3>
    <h2> Social Media: </h2>
    <a href=https://www.facebook.com/ThatsHowIRollIthaca/><h3>Facebook</h3></a>
    <a href=https://www.yelp.com/biz/thats-how-i-roll-ithaca/><h3>Yelp</h3></a>
    <h2> Email: </h2>
    <h3> thats.how.i.roll@outlook.com </h3>
  </div>

  <div id="submitted-thanks">
    <h1> Thank you, <?php echo($name); ?> ! Your email, <?php echo($email); ?>
      has been successfully sent, along with the message of: <br/>
      <?php echo($message); ?> <br/>
      You will be conacted at this email shortly.
    </h1>
  </div>
</body>

</html>
