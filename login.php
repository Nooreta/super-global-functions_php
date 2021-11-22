<?php
session_start();
if(isset($_SESSION['errors']))
{?>
<div>
<ul>
<?php 
foreach($_SESSION['errors'] as $error)
{?>
    <li><?php echo $error; ?></li>
    <?php
} ?>
</ul>
</div>

<?php }
?>

<form action="handleLogin.php" method="post">
Email:<input type="email" name="uemail" value="" placeholder="Email">
<br>
Password: <input type="password" name="upassword" value="" placeholder="Password">
<br>
<input type="submit" name="submit" value="login">
</form>