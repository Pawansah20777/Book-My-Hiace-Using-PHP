<?php
if(isset($_POST['submit']))
{
   
	$x= $_POST["em"];
	$y= $_POST["pswd"];
   }
 $con = mysqli_connect("localhost","root","","student");
$sql="INSERT INTO login VALUES ('$x','$y');";
$que=mysqli_query($con,$sql);

if($que){
   header('location:pk2.html');
}
else{
    echo "error";
}
?>