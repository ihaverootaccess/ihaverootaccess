<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $username?></title>
 <link href="../site.css" type="text/css" rel="stylesheet">
</head>

<body>
  <div class="two">

          <h1>Welcome</h1>
          
          <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          ?>
          </p>
          
          <?php
          
      // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              <p> Account is unverified, please confirm your email by clicking
              on the email link!
              </p></div>';
          }
          
          ?>
          
          <h3><?php echo $username ?></h3>
          <p><?= $email ?></p>
          
          <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>

    </div>
    
<script src="js/index.js"></script>

</body>
</html>
