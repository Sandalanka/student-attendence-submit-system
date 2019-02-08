<?php require_once('connection.php'); ?>
<?php session_start(); ?>

<?php
$error=array();
if(isset($_POST['submit'])){

    

    

    if(empty($error)){
        $name=$_POST['name'];
        $sid=$_POST['sid'];
        $to=$_POST['tt'];
        $from=$_POST['from'];
      
        $query="INSERT INTO leav(name,std_id,ttt,fff)VALUES('{$name}','{$sid}','{$to}','{$from}')";
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
    <title>Leave Apply</title>
    <link rel="stylesheet" href="main.css">
   
    

</head>
<body>
<header>
        <div class="appname">Leave</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
    <main>
<h1>Leave  <span><a href="student.php">Back to page</a></span></h1>
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

<form action="addleave.php"method="POST" class="userform">
<p>
    <label for="">Name</label>
    <input type="text"name="name" require>
</p>
<p>
    <label for="">Student ID Number</label>
    <input type="number" name="sid" id="" require>
</p>
<p>
    <label for="">To</label>
    <input type="date" name="tt" >
</p>
<p>
    <label for="">From</label>
    <input type="date" name="from" require>
</p>

<p>
    <button type="submit" name="submit">Apply</button>
</p>

</form>
    </main>
    
</body>
</html>