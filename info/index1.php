<?php
if(isset($_POST['submit']))
{
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
	$d = $_POST["d"];
    $e = $_POST["e"];
    $f = $_POST["f"];
	$g = $_POST["g"];
    $h = $_POST["h"];
}

 $con = mysqli_connect("localhost","root","","student");
$sql="INSERT INTO info VALUES ('$a','$b','$c','$d','$e','$f','$g','$h');";
$que=mysqli_query($con,$sql);

if($que){
  header('location:payment.html');
}
else{
    echo "error";
}


?>