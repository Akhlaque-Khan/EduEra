<?php
if($_POST){
    $host="localhost";
    $user="root";
    $pass="";
    $db="form";
    $email=$_POST['email'];
    $password=$_POST['Phone'];
    $conn=mysqli_connect($host,$user,$pass,$db);
    $query="SELECT * FROM signup WHERE email='$email' AND Phone='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['form']='true';
        header('location:Home.php');
    }
    else{
        header('location:Relogin.php');
    }
}

?>