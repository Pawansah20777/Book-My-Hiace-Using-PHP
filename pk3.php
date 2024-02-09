<?php
if(isset($_POST['submit']))
{
   
	$x= $_POST["p"];
	$y= $_POST["a"];
	$y1=implode(",",$y);
   }
 $con = mysqli_connect("localhost","root","","student");
$sql="INSERT INTO seat VALUES ('$x','$y1');";
$que=mysqli_query($con,$sql);

if($que){
   header('location:info/index1.html');
}
else{
    echo "error";
}
?>