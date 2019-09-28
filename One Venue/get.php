<?php
  
  $Location = $_POST['location'];
  $Date = $_POST['date'];
  $Capacity=$_POST['capacity'];
  $FromTime=$_POST['ftime'];
  $ToTime=$_POST['ttime'];
  $conn = mysqli_connect("localhost:3306","root","","one_venue");
  
  if(!$conn)
  {
      die("Not Connected..".mysqli_connect_error());
  }
  else
    "Connected Properly";
  $sql="select * from details where Location='$Location', Capacity='$Capacity', From Time='$FromTime', To Time='$ToTime';";
  if(mysqli_query($conn,$sql))
  {
      echo "";
  }
  else
  {
      echo "Not Inserted";
  }
  

  mysqli_close($conn);
?>
