<?php 
/* Verifies registered user email, the link to this page
   is included in the register.php email message 
*/
require 'db.php';
session_start();

// Make sure email and password variables aren't empty
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['password']) && !empty($_GET['password']))
{
    $email = $mysqli->escape_string($_GET['email']); 
    $password = $mysqli->escape_string($_GET['password']); 
    
    // Select user with matching email and password, who hasn't verified their account yet (active = 0)
    $result = $mysqli->query("SELECT * FROM signup WHERE email='$email' AND password='$password' AND active='0'");

    if ( $result->num_rows == 0 )
    { 
        $_SESSION['message'] = "Account has already been activated or the URL is invalid!";

        header("location: error.php");
    }
    else {
        $_SESSION['message'] = "Your account has been activated!";
        
        // Set the user status to active (active = 1)
        $mysqli->query("UPDATE users SET active='1' WHERE email='$email'") or die($mysqli->error);
        $_SESSION['active'] = 1;
        
        header("location: success.php");
    }
}

else {
    $_SESSION['message'] = "Invalid parameters provided for account verification!";
    header("location: error.php");
}  

?>