<?php require_once('connection.php'); ?>
<?php session_start(); ?>

<?php
$error=array();
if(isset($_POST['submit'])){

    

    

    if(empty($error)){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
       
        $date=mysqli_real_escape_string($connection,$_POST['date']);
        $complane=mysqli_real_escape_string($connection,$_POST['complane']);
      
        $query="INSERT INTO complane(name,date,complane)VALUES('{$name}','{$date}','{$complane}')";
     $result=mysqli_query($connection,$query);

    }
    if($result){
        header('Location:student.php?add_user=true');
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
    <title>Complane</title>
    <link rel="stylesheet" href="main.css">
   
    

</head>
<body>
<header>
        <div class="appname">Complane</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
    <main>
<h1>Enter Complane <span><a href="student.php">Back to page</a></span></h1>
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

<form action="addcomplane.php"method="POST" class="userform">
<p>
    <label for="">Name</label>
    <input type="text"name="name" require>
</p>

<p>
    <label for="">Date</label>
    <input type="date" name="date" id="" require>
</p>
<p>
    <label for="">Complane</label>
    <input type="text" name="complane" require>
</p>

<p>
    <button type="submit" name="submit">Enter</button>
</p>

</form>
    </main>
    
</body>
</html>