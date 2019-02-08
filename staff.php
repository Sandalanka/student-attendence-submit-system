<?php  require_once('connection.php'); ?>
<?php session_start(); ?>
<?php
if(!isset($_SESSION['user_id'])){
    header('Location:index.php');
}

$userlist='';
$query="SELECT*FROM student WHERE is_deleted=0 ORDER BY name";
$users=mysqli_query($connection,$query);
if($users){
while($user=mysqli_fetch_assoc($users)){
    $userlist.="<tr>";
    $userlist.="<td>{$user['name']} </td>";
    $userlist.="<td>{$user['id_num']} </td>";
    $userlist.="<td>{$user['std_id']} </td>";
    $userlist.="<td>{$user['address']} </td>";
    $userlist.="<td>{$user['email']} </td>";
    $userlist.="<td>{$user['contact']} </td>";
    $userlist.="<td>{$user['department']} </td>";
   
    $userlist.="<td><a href=\"sdelete.php?user_id={$user['id']}\">Remove</a></td>";
    $userlist.="</tr>";
}
}
else{
    echo 'Database Error';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff</title>
    <link rel="stylesheet" href="main.css">
    
 
    
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="ab">
<header >
        <div class="appname">Online Attendence Enter</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
   
    
        <div class="book"><a href="complane.php">Complane Information       </a></div>
        <div class="passanger"><a href="leave.php">Leave Information</a></div>
        <div class="booking"><center><a href="attendence.php">  Attendence Enter</a><center></div>
       
        
    
   
    
     
     
<main>
    <center><h1>Student Details<span><a href="addstudent.php">+Add New student</a></span></h1></center>
    <table class="masterlist">
    <tr>
        <th>Name</th>
        <th>NIC Number</th>
        <th>Student ID</th>
        <th>Address</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Department</th>
        <th>Remove Student</th>

</tr>
<?php echo $userlist; ?>
</table>
</main>

</body>
</html> 