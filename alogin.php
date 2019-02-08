<?php require_once('connection.php');?>
<?php session_start(); ?>
<?php
if(isset($_POST['submit'])){
$error=array();

if(!isset($_POST['email'])||strlen(trim($_POST['email']))<1){
$error[]='user name missing';
}
if(!isset($_POST['password'])||strlen(trim($_POST['password']))<1){
    $error[]='password missing';
    }
if(empty($error)){
$email=mysqli_real_escape_string($connection,$_POST['email']);
$password=mysqli_real_escape_string($connection,$_POST['password']);

$query="SELECT*FROM admin WHERE password='{$password}' AND email='{$email}'LIMIT 1";

$result_set=mysqli_query($connection,$query);
if($result_set){
//query succesful
if(mysqli_num_rows($result_set)==1){
$user=mysqli_fetch_assoc($result_set);
$_SESSION['user_id']=$user['id'];
$_SESSION['name']=$user['name'];

//$query="UPDATE user SET date=NOW()";
//$query.="WHERE id={$_SESSION['user_id']} LIMIT 1";
//$result_set=mysqli_query($connection,$query);
    header('Location:backend.php');

}
else{
    $error[]='Invalied user name/password';
}
}
else{
    $error[]='Database query failed';
}

}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="login">

<form action="alogin.php" method="post">
<fieldset>
<legend><H1>Admin Login In</H1></legend>
 <?php
if(isset($error)&& !empty($error)){
echo' <p class="error">Invailed User name/Password</p>';
}
?>
<p>
<label for="">User name</label>
<input type="email"name="email" id="" placeholder="Email address">

</p>

<p>
<label for="">password</label>
<input type="password" name="password" placeholder="password">
</p>

<p>
<button type="submit" name="submit">Login In</button></p>
</fieldset>
</form>
</div>
    
</body>
</html>