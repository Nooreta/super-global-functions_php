

<?php
session_start();
if(isset($_SESSION['login']) and $_SESSION['login']==true)
{
  echo "Your email is {$_SESSION['uemail']} <br/>";
}
else 
{
    echo "Please,click here to login"."<a href='login.php'>login </a>";
}
echo "<br/>";
echo "<a href='logout.php'>Logout</a>";
?>