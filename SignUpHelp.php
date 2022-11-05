<?php
if($_POST){
    $host="localhost";
    $user="root";
    $pass="";
    $db="form";
    $email=$_POST['email'];
    $password=$_POST['Phone'];
    $conn=mysqli_connect($host,$user,$pass,$db);
$name=$_POST['name'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$address1=$_POST['address'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$query="SELECT EMAIL FROM signup WHERE EMAIL='$email'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)){
    
    header('location:ReSignUp.php');
}
else{
$data="INSERT INTO SignUp(FULLNAME,FATHER_NAME,EMAIL,ADDRESS,PHONE,GENDER) VALUES ('$name','$fname','$email','$address1','$phone','$gender')";
mysqli_query($conn,$data);
header('location:Main.php');
}
}
?>