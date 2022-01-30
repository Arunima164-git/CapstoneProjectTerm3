<?php
$con = mysqli_connect('localhost','root','','gemsdb');
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$check_data = mysqli_query($con,"SELECT * FROM userdetails WHERE email = '$email'");
$check = mysqli_num_rows($check_data);

if($check > 0){
echo "email already exist";
}else{
$input = mysqli_query($con,"INSERT INTO userdetails (id,username,email_id,password)VALUES('$id','$username','$email_id','$password')");
if($input){
echo 'SignUp Successfull';
}
}

?>