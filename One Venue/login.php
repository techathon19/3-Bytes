<?php

ob_start();
$conn = mysqli_connect("localhost:3306","root","","one_venue");
  if(!$conn)
  {
      die("Not Connected..".mysqli_connect_error());
  }
  else
    "Connected Properly";
$Email=$_POST['email'];
$Password=md5($_POST['psw']);
$sql="select * from customers where email='$Email' and password='$Password'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if ($count==1){
  header("location:index.html");
}
else{
  echo "Not existing";
}
ob_end_flush();
?>