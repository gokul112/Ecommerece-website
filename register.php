<?php
$con=mysqli_connect("localhost","root","","project");
$name=$_POST["NAME"];
$model=$_POST["model"];
$pin=$_POST["pincode"];
$sql=mysqli_query($con,"insert into book values('$name','$model','$pin')");
echo"<center><a href='main.html'>CLICK HERE TO COMPLETE REGISTRATION.......</a></center>";
?>
