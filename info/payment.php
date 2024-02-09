<?php
if(isset($_POST['submit']))
{
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
	$d = $_POST["d"];
    $e = $_POST["e"];
    $f = $_POST["f"];
}

 $con = mysqli_connect("localhost","root","","student");
$sql="INSERT INTO payment VALUES ('$a','$b','$c','$d','$e','$f');";
$que=mysqli_query($con,$sql);

if($que){
 echo "THANKS FOR VISITING......";
}
else{
    echo "error";
}


?>