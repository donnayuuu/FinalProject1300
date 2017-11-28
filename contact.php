<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>That's How I Roll</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
</head>
<body id="contact-page">
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

  <div id="contact-info">
    <h2> Phone Number: </h2>
    <h3> (607) 339-1238 </h3>
    <h2> Social Media: </h2>
    <a href=https://www.facebook.com/ThatsHowIRollIthaca/><h3>Facebook</h3></a>
    <a href=https://www.yelp.com/biz/thats-how-i-roll-ithaca/><h3>Yelp</h3></a>
    <h2> Email: </h2>
    <h3> thats.how.i.roll@outlook.com </h3>
  </div>


  <!-- Still need to add error messages and corresponding javascript.
  Validation will be done next, along with customized error messages,
  and echoing the response back to the user. This will be tested as
  required in the write up.
  Pseudocode: First, check if the username is empty.
  If the username is empty, do not allow the user to submit the page and show
  them the error message (has not been written yet).
  If the username has text in it,  do not show the error message.
  Next, check if the email is empty, if it is empty show the error message and
  do not allow the user to submit.
  If it is not a valid email, do the same.
  If it is valid and not empty, do not show the error message.
  Then, check if the message is empty.
  If the message is empty, show the error message and do not allow the user
  to submit.
  If it is not empty, do not show the error message.
  If all of these fields are valid, allow the user to submit and go to the
  submitted page. There should likely be a variable that will switch to false
  if any of these fields are not valid, and if it is false at the end do not
  allow the user to submit and show the respective error message.
  If necessary, store the variables in php and display them on. -->
  <div id="form-div">
    <form id="form" method="get" action="submitted.php">
      <div>
        <label> Name: </label>
        <input name="name" placeholder="Your Name">
      </div>
      <div>
        <label> Email: </label>
        <input name="email" type="email" placeholder="Your Email">
      </div>
      <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <div>
        <button type="submit" class="submit">Submit</button>
      </div>
    </form>
  </div>

</body>
</html>
