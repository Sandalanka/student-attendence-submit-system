<?php require_once('connection.php'); ?>
<?php session_start(); ?>

<?php
$error=array();
if(isset($_POST['submit'])){

    

    

    if(empty($error)){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
       
        $sid=mysqli_real_escape_string($connection,$_POST['sid']);
        $date=mysqli_real_escape_string($connection,$_POST['date']);
      
        $query="INSERT INTO attendence(name,std_id,date)VALUES('{$name}','{$sid}','{$date}')";
     $result=mysqli_query($connection,$query);

    }
    if($result){
        header('Location:addattendence.php?add_user=true');
    }
    else{
        echo 'Error';
    }

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendence</title>
    <link rel="stylesheet" href="main.css">
   
    

</head>
<body>
<header>
        <div class="appname">Attendence</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
    <main>
<h1>Enter Attendence <span><a href="attendence.php">Back to page</a></span></h1>
<?php
if(!empty($error)){
    echo '<div class="errmsg">';
    echo '<b>There was error</b>';
    foreach($error as $error){
        echo $error.'<br>';
    }
    echo "</div>";

}
?>

<form action="addattendence.php"method="POST" class="userform">
<p>
    <label for="">Name</label>
    <input type="text"name="name" require>
</p>

<p>
    <label for="">Student ID Number</label>
    <input type="number" name="sid" id="" require>
</p>
<p>
    <label for="">Date</label>
    <input type="date" name="date" require>
</p>

<p>
    <button type="submit" name="submit">Enter</button>
</p>

</form>
    </main>
    
</body>
</html>