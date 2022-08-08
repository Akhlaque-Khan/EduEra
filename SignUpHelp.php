<?php
$conn=mysqli_connect('localhost','root');
/*if($conn){
    echo "Connection Established";
}
else{
    echo "Connection not Established";
}*/
mysqli_select_db($conn,'form');
$name=$_POST['name'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$address1=$_POST['address'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$data="INSERT INTO SignUp(FULLNAME,FATHER_NAME,EMAIL,ADDRESS,PHONE,GENDER) VALUES ('$name','$fname','$email','$address1','$phone','$gender')";
mysqli_query($conn,$data);
header('location:Main.php');






?>