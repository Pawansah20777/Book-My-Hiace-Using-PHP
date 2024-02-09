<?php


 if(isset($_POST['submit']))
{
    $date = $_POST["date"];
    $from = $_POST["from"];
   $to = $_POST["to"];
   }
 $con = mysqli_connect("localhost","root","","student");
$sql="INSERT INTO hiace VALUES ('$date','$from','$to');";
$que=mysqli_query($con,$sql);

if($que){
  header('location:pk3.html');
}
else{
    echo "error";
}


?>