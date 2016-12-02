<html>
<body bgcolor="silver">
<?php
$con=mysqli_connect("localhost","root","","project");
$name=$_POST["NAME"];
$model=$_POST["model"];
$pin=$_POST["pincode"];
$sql=mysqli_query($con,"insert into kart values('$name','$model','$pin')");
echo "<center><a href='main.html'>cilick here tocomplete registeration</a></center>";
?>
</body>
</html>