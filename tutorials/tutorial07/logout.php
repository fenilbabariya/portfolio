<?php

if (isset($_COOKIE['username']) && (isset($_COOKIE['password'])))
  {
      $username=$_COOKIE['username'];
      $password=$_COOKIE['password'];

      setcookie('username',$username,time()-1);
      setcookie('password',$password,time()-1);
  }
 session_start();

  echo '<script type="text/javascript"> alert("Logout Successfully... ");</script>';
  session_destroy();   // function that Destroys Session 
  header("Location: login.php");
?>
