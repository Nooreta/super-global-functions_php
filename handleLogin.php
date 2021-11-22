<?php
if(isset($_POST['submit']))
{
    session_start();
$uemail=$_POST['uemail'];
$upassword=$_POST['upassword'];
$passLen=strlen($upassword);
$errors=[];
//email validation
if(empty($uemail))
{
    $errors[]="email is required,please fill it";
}
elseif(!filter_var($uemail,FILTER_VALIDATE_EMAIL))
{
 $errors[]="Email is not valid";
}
//password validation
if(empty($upassword))
{
    $errors[]="password is required,please fill it";
}
else if(!is_string($upassword))
{
    $errors[]="Password is not valid";
}
elseif($upassword<8 or $upassword>30)
{
    $errors[]="The password should be between 8 and 30";
}
if(empty($errors))
{
$_SESSION['uemail']=$uemail;
$_SESSION['upassword']=$upassword;
$_SESSION['login']=true;
header("location: index.php");
}
else {
    $_SESSION['errors']=$errors;
}
}


?>