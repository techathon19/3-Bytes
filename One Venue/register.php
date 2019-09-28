<?php
  
  $Name = $_POST["name"];
  $Email = $_POST["email"];
  $Password =md5($_POST["pwd"]);
  $conn = mysqli_connect("localhost:3306","root","","one_venue");
  
  if(!$conn)
  {
      die("Not Connected..".mysqli_connect_error());
  }
  else
    "Connected Properly";
  $sql = "insert into customers(Name,Email,Password) values('$Name','$Email','$Password')";
  if(mysqli_query($conn,$sql))
  {
      header("location:login.html");
  }
  else
  {
      echo "Not Inserted";
  }
  

  mysqli_close($conn);
?>