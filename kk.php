<?php
$con=mysqli_connect("localhost","root","","project");
$name=$_POST["name"];
$email=$_POST["email"];
$acc=$_POST["acn"];
$pass=$_POST["pass"];
$mobile=$_POST["mobile"];
$sql=mysqli_query($con,"insert into register values('$name',$mobile,'$acc','$pass','$email')");
$am=mysqli_query($con,"insert into login values('$name','$pass')");
echo"<center><a href='main.html'>CLICK HERE TO COMPLETE REGISTRATION.......</a></center>";
?>
