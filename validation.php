<?php

session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'userregistration');

if (isset($_POST['user'])) 
{ 
    $name = $_POST['user']; 
}
if (isset($_POST['password'])) 
{ 
    $pass = $_POST['password']; 
} 


$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['$username'] = $name;
    header('location:index.html');
}else{
    header('location:login.php');
}
    

?>
    
    