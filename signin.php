<?php
$con = mysqli_connect('localhost','root','','gemsdb');
$email = $_POST['email_id'];
$password = $_POST['password'];

$check_data = mysqli_query($con,"SELECT * FROM userdetails WHERE email_id = '$email_id' and password = '$password'");
$check = mysqli_num_rows($check_data);

if($check > 0){
echo "Login Successful";
}else{
echo "Login Failed";
}

?>

