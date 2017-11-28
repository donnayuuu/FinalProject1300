<?php
  $HIDDEN_ERROR_CLASS = "hidden";
  $email = "";
  $name = "";
  $post = "";
  $submit = $_REQUEST["submit"];

  if (isset($submit)) {
    $email = $_REQUEST["email"];
    $name = $_REQUEST["name"];
    $post = $_REQUEST["message"];
    $ValidEmail= filter_var($email, FILTER_VALIDATE_EMAIL);

    if(empty($email) || !$ValidEmail){
      $isEmailValid = false;
    }
    else {
      $isEmailValid = true;
    }

    if(empty($name)){
      $isNameValid= false;
    }
    else{
      $isNameValid = true;
    }

    if(empty($post)){
      $isPostValid= false;
    }
    else{
      $isPostValid = true;
    }

    $formValid=$isEmailValid && $isNameValid && $isPostValid;
    if ($formValid) {
      session_start();
      $_SESSION['usermail'] = $email;
      $_SESSION['username'] = $name;
      $_SESSION['msg'] = $post;
      header("Location: submitted.php");
      return;
    }
  }
  else {
    $isEmailValid = true;
    $isNameValid = true;
    $isPostValid = true;
  }
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>That's How I Roll</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">

  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/site.js" type="text/javascript"></script>
</head>
<body id="contact-page">
  <div id="header">
    <?php
     include "includes/header-navigation.php";
    ?>
  </div>

  <div class="page-title">
    <h1> Contact Us</h1>
  </div>


  <div class="sushi-icon-page">
    <img class="page-sushi" alt="Sushi Icon" src="../images/home-sushi.jpg"/>
  </div>
  <br/>

  <div id="contact-info">
    <h2> Phone Number: </h2>
    <h3> (607) 339-1238 </h3>
    <h2> Social Media: </h2>
    <a href=https://www.facebook.com/ThatsHowIRollIthaca/><h3>Facebook</h3></a>
    <a href=https://www.yelp.com/biz/thats-how-i-roll-ithaca/><h3>Yelp</h3></a>
    <h2> Email: </h2>
    <h3> thats.how.i.roll@outlook.com </h3>
  </div>

  <div id="form-div">
    <form id="form" method="post" action="contact.php" novalidate>
      <div>
        <label> Name: </label>
        <input name="name" id="uname" value= "<?php echo $name ?>" required>
      </div>
      <span class="<?php if ($isNameValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="userError">
        You must provide a name.
      </span>

      <div>
        <label> Email: </label>
        <input name="email" type="email" id="uemail" value= "<?php echo $email ?>" required>
      </div>
      <span class="<?php if ($isEmailValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="emailError">
        You must provide a valid email.
      </span>

      <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" value= "<?php echo $post ?>" required></textarea>
      </div>
      <span class="<?php if ($isPostValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="msgError">
        You must provide content here.
      </span>

      <div>
        <button type="submit" name="submit" class="submit">Submit</button>
      </div>
    </form>
  </div>

</body>
</html>
