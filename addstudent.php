<?php require_once('connection.php'); ?>
<?php session_start(); ?>

<?php
$error=array();
if(isset($_POST['submit'])){

    

    

    if(empty($error)){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $id=mysqli_real_escape_string($connection,$_POST['id']);
        $sid=mysqli_real_escape_string($connection,$_POST['sid']);
        $address=mysqli_real_escape_string($connection,$_POST['address']);
        $email=mysqli_real_escape_string($connection,$_POST['email']);
        $contact=mysqli_real_escape_string($connection,$_POST['contact']);
        $department=mysqli_real_escape_string($connection,$_POST['department']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        $query="INSERT INTO student(name,id_num,std_id,address,email,contact,department,password)VALUES('{$name}','{$id}','{$sid}','{$address}','{$email}','{$contact}','{$department}','{$password}')";
     $result=mysqli_query($connection,$query);

    }
    if($result){
        header('Location:staff.php?add_user=true');
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
    <title>Student Add</title>
    <link rel="stylesheet" href="main.css">
   
    

</head>
<body>
<header>
        <div class="appname">Student</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
    <main>
<h1>Add New Student <span><a href="staff.php">Back to page</a></span></h1>
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

<form action="addstudent.php"method="POST" class="userform">
<p>
    <label for="">Name</label>
    <input type="text"name="name" require>
</p>
<p>
    <label for="">NIC Number</label>
    <input type="number" name="id" id="" require>
</p>
<p>
    <label for="">Student ID Number</label>
    <input type="number" name="sid" id="" require>
</p>
<p>
    <label for="">Address</label>
    <input type="text" name="address" require>
</p>
<p>
    <label for="">Email Address</label>
    <input type="email" name="email" require>
</p>
<p>
    <label for="">Contact Number</label>
    <input type="number" name="contact" require>
</p>
<p>
    <label for="">Department</label>
    <input type="text" name="department" id="" require>
</p>
<p>
    <label for="">Password</label>
    <input type="password" name="password" require>
</p>
<p>
    <button type="submit" name="submit">Add student</button>
</p>

</form>
    </main>
    
</body>
</html>