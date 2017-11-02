<!--
<!doctype html>

<html lang="en-US">
    <title>Register</title>
    <meta charset="utf-8" width=device-width initial-scale=1.0>
    <head>
    <link href="../site.css" type="text/css" rel="stylesheet">
    </head>
    <body>-->
        <!--<div class="two">
        <h1>REGISTER</h1>-->
        <!--<a href="../login/index.php"><Button type="submit" onclick="alert('Redirecting you to sign-up page')">Sign-up</Button> </a> <br>--> 
         <!--     
        <form action="../login/index.php" method="post">
            
        User Name: <br/>    
        <input type="text" name="username"> <br><br>
        Email: <br>
        <input type="text" name="Email"> <br><br>    
        Password: <br>
        <input type="password" name="Password"><br/> <br/>
        Tell us a little about yourself <br/><br>    
        <textarea name="message" rows="15" cols="40">   
        </textarea> <br/> <br/>    
        <Button type="submit" onclick="alert('Successful registration')">Submit</Button> <br>     
        
        </form>
           
        
        </div>
    </body>
</html>
-->
<?php 
/* Main page with two forms: sign up and log in */
require '../login/db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <link href="../site.css" type="text/css" rel="stylesheet">
</head>
<?php include '../side-menu.php';?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require '../login/login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require '../login/register.php';
        
    }
}
?>
<body>
 <div class="two">
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
          <br><br>

         <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="Register.php" method="post" >
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password"/>
          </div>
          
              <a href="../login/forgot.php"><p text-decoration="none">Forgot Password?</p></a>
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
     
     <!-- Sign up content ahead -->
     
     
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="Register.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                User Name<span class="req">*</span>
              </label>
              <input type="text" required name='username' />
            </div>
          </div>
              <br>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src="js/index.js"></script>

</body>
</html>
