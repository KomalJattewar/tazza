
<?php
$username=$_POST['username'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$msg=$_POST['msg'];

//database connection
$con = new mysqli("localhost","root","","tazza");

$query="INSERT INTO tazza(username,email,mobile,address,msg)VALUE('$username','$email','$address','$mobile','$msg')";
$result=$con->query($query)or die($con->error);
if($result){
   header('location:index.html');
}

    
?>