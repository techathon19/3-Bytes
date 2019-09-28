<?php
  
  $Location = $_POST['location'];
  $Date = $_POST['date'];
  $Hall=$_POST['hall'];
  $FromTime=$_POST['ftime'];
  $ToTime=$_POST['ttime'];
  $conn = mysqli_connect("localhost:3306","root","","one_venue");
  
  if(!$conn)
  {
      die("Not Connected..".mysqli_connect_error());
  }
  else
    "Connected Properly";
  $sql="insert into booking(Location,date,hall,FromTime,ToTime) values('$Location','$Date','$Hall','$FromTime','$ToTime')";
  if(mysqli_query($conn,$sql))
  {
      header("location:book.html");
  }
  else
  {
      echo "Not Inserted";
  }
  

  mysqli_close($conn);
?>
